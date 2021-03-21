<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Service\MessageGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
      /**
     * @Route("/admin/user", name="admin_read_user",  methods={"GET"})
     */
    public function readUserAdmin(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();

        return $this->render('user/admin_read_user.html.twig', [
            'users' => $users,
        ]);
    }


     /**
     * @Route("/admin/user/create", name="admin_create_user",  methods={"GET", "POST"})
     */
    public function createUser(Request $request, UserPasswordEncoderInterface $passwordEncoder, MessageGenerator $messageGenerator)
    {
         $user = new User();

         $form= $this->createForm(UserType::class, $user);

         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {

            $hashedPassword = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
             
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->persist($user);
             $entityManager->flush();
 
             $this->addFlash('success', $messageGenerator->getHappyMessage());

             return $this->redirectToRoute('admin_read_user');
         }

         return $this->render('user/admin_form_user.html.twig', [
         'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/user/update/{id<\d+>}", name="admin_update_user", methods={"GET", "PATCH"})
     */
    public function updateUser(User $user, Request $request, UserPasswordEncoderInterface $passwordEncoder, MessageGenerator $messageGenerator)
    {
        if (null === $user) {
            throw $this->createNotFoundException('Utilisateur non trouvé.');
        }

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $hashedPassword = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);

            $user->setUpdatedAt(new \DateTime());

            $entityManager = $this->getDoctrine()->getManager();
    
            $entityManager->flush();

            $this->addFlash('success', $messageGenerator->getHappyMessage());

            return $this->redirectToRoute('admin_read_user');
        }

        return $this->render('user/admin_form_user.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/user/delete/{id<\d+>}", name="admin_delete_user", methods={"GET", "DELETE"})
     */
    public function deleteUser(User $user = null, EntityManagerInterface $entityManager, Request $request, MessageGenerator $messageGenerator)
    {
        if (null === $user) {
            throw $this->createNotFoundException('Utilisateur non trouvé.');
        }

        $entityManager->remove($user);
        $entityManager->flush();

        $this->addFlash('success', $messageGenerator->getHappyMessage());
        
        return $this->redirectToRoute('admin_read_user');
    }

    /**
     * @Route("/contact", name= "contact", methods= {"GET"})
     */
    public function contact()
    {
        return $this->render('contact.html.twig');
    }

    /**
     * @Route("/mentions_legales", name= "mentions", methods= {"GET"})
     */
    public function mentions()
    {
        return $this->render('mentions.html.twig');
    }
}
