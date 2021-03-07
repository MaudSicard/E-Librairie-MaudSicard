<?php

namespace App\Controller;

use App\Entity\Gendre;
use App\Form\GenderType;
use App\Repository\GroupRepository;
use App\Repository\GendreRepository;
use App\Service\MessageGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GenderController extends AbstractController
{
    /**
     * @Route("/", name="read_gender", methods={"GET"})
     */
    public function read(GendreRepository $gendreRepository): Response
    {
        $genders = $gendreRepository->findBy([], ['name'=>'ASC']);
    
        return $this->render('gender/gender_read.html.twig', [
            'genders' => $genders,
        ]);
    }

      /**
     * @Route("/admin/gender", name="admin_read_gender")
     */
    public function readGenderAdmin(GendreRepository $gendreRepository): Response
    {
        $genders = $gendreRepository->findAll();

        return $this->render('gender/admin_read_gender.html.twig', [
            'genders' => $genders,
        ]);
    }


     /**
     * @Route("/gender/gender/{slug}", name="show_gender_book", methods={"GET"})
     */
    public function ShowGenderBook(Gendre $gender = null, GroupRepository $groupRepository): Response
    {
        if ($gender === null) {
            throw $this->createNotFoundException('Genre non trouvé.');
        }

        $groupBooks = $groupRepository->findBookByGender($gender);

        return $this->render('gender/gender_show_book.html.twig', [
            'gender' => $gender,
            'groupBooks'=> $groupBooks
        ]);
    }

    /**
     * @Route("/admin/create/gender", name="admin_create_gender")
     */
    public function createGender(Request $request, MessageGenerator $messageGenerator)
    {
         $gender = new Gendre();

         $form= $this->createForm(GenderType::class, $gender);

         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {
             
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->persist($gender);
             $entityManager->flush();
 
             $this->addFlash('success', $messageGenerator->getHappyMessage());

             return $this->redirectToRoute('admin_read_gender');
         }
 
         return $this->render('gender/admin_form_gender.html.twig', [
         'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/update/gender/{id<\d+>}", name="admin_update_gender", methods={"GET", "POST"})
     */
    public function updateGender(Gendre $gender, Request $request, MessageGenerator $messageGenerator)
    {
        if (null === $gender) {
            throw $this->createNotFoundException('Genre non trouvé.');
        }

        $form = $this->createForm(GenderType::class, $gender);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $gender->setUpdatedAt(new \DateTime());

            $entityManager = $this->getDoctrine()->getManager();
    
            $entityManager->flush();

            $this->addFlash('success', $messageGenerator->getHappyMessage());

            return $this->redirectToRoute('admin_read_gender');
        }

        return $this->render('gender/admin_form_gender.html.twig', [
            'gender' => $gender,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/delete/gender/{id<\d+>}", name="admin_delete_gender", methods={"GET", "POST"})
     */
    public function deleteGender(Gendre $gender = null, EntityManagerInterface $entityManager, Request $request, MessageGenerator $messageGenerator)
    {
        if (null === $gender) {
            throw $this->createNotFoundException('Genre non trouvé.');
        }

        $entityManager->remove($gender);
        $entityManager->flush();

        $this->addFlash('success', $messageGenerator->getHappyMessage());

        return $this->redirectToRoute('admin_read_gender');
    }
}
