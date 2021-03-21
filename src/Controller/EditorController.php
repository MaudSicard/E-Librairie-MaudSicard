<?php

namespace App\Controller;

use App\Entity\Editor;
use App\Form\EditorType;
use App\Service\MessageGenerator;
use App\Repository\GroupRepository;
use App\Repository\EditorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EditorController extends AbstractController
{
    
    /**
     * @Route("/editor", name="read_editor", methods={"GET"})
     */
    public function readEditor(EditorRepository $editorRepository): Response
    {
        $editors = $editorRepository->findBy([], ['name'=>'ASC']);
    
        return $this->render('editor/editor_read.html.twig', [
            'editors' => $editors,
        ]);
    }

     /**
     * @Route("/admin/editor", name="admin_read_editor",  methods={"GET"})
     */
    public function readEditorAdmin(EditorRepository $editorRepository): Response
    {
        $editors = $editorRepository->findAll();

        return $this->render('editor/admin_read_editor.html.twig', [
            'editors' => $editors,
        ]);
    }

     /**
     * @Route("/editor/editor/{slug}", name="show_editor_book", methods={"GET"})
     */
    public function ShowAuthorBook(Editor $editor = null, GroupRepository $groupRepository): Response
    {
        if ($editor === null) {
            throw $this->createNotFoundException('Editeur non trouvé.');
        }

        $groupBooks = $groupRepository->findBookByEditor($editor);

        return $this->render('editor/editor_show_book.html.twig', [
            'editor' => $editor,
            'groupBooks'=> $groupBooks
        ]);
    }

    /**
     * @Route("/admin/create/editor", name="admin_create_editor",  methods={"GET", "POST"})
     */
    public function createAuthor(Request $request, MessageGenerator $messageGenerator)
    {
         $editor = new Editor();

         $form= $this->createForm(EditorType::class, $editor);

         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {
             
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->persist($editor);
             $entityManager->flush();
 
             $this->addFlash('success', $messageGenerator->getHappyMessage());

             return $this->redirectToRoute('admin_read_editor');
         }

         return $this->render('editor/admin_form_editor.html.twig', [
         'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/update/editor/{id<\d+>}", name="admin_update_editor", methods={"GET", "PATCH"})
     */
    public function updateEditor(Editor $editor, Request $request, MessageGenerator $messageGenerator)
    {
        if (null === $editor) {
            throw $this->createNotFoundException('Livre non trouvé.');
        }

        $form = $this->createForm(EditorType::class, $editor);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $editor->setUpdatedAt(new \DateTime());

            $entityManager = $this->getDoctrine()->getManager();
    
            $entityManager->flush();

            $this->addFlash('success', $messageGenerator->getHappyMessage());

            return $this->redirectToRoute('admin_read_editor');
        }

        return $this->render('editor/admin_form_editor.html.twig', [
            'editor' => $editor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/delete/editor/{id<\d+>}", name="admin_delete_editor", methods={"GET", "DELETE"})
     */
    public function deleteEditor(Editor $editor = null, EntityManagerInterface $entityManager, Request $request, MessageGenerator $messageGenerator)
    {
        if (null === $editor) {
            throw $this->createNotFoundException('Livre non trouvé.');
        }

        $entityManager->remove($editor);
        $entityManager->flush();

        $this->addFlash('success', $messageGenerator->getHappyMessage());

        return $this->redirectToRoute('admin_read_editor');
    }
}

