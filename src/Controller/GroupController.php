<?php

namespace App\Controller;

use App\Entity\Book;
use App\Entity\Group;
use App\Form\GroupType;
use App\Repository\GroupRepository;
use App\Service\MessageGenerator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GroupController extends AbstractController
{
    /**
     * @Route("/admin/create/group", name="admin_create_group")
     */
    public function createGroup(Request $request, MessageGenerator $messageGenerator)
    {
         $group = new Group();

         $form= $this->createForm(GroupType::class, $group);
 
         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {
           
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->persist($group);
             $entityManager->flush();
 
             $this->addFlash('success', $messageGenerator->getHappyMessage());
             
             return $this->redirectToRoute('admin_read_book');
         }

         return $this->render('group/admin_form_group.html.twig', [
         'form' => $form->createView(),
        ]);
    }
}
