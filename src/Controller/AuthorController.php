<?php

namespace App\Controller;

use App\Entity\Author;
use App\Form\AuthorType;
use App\Repository\GroupRepository;
use App\Repository\AuthorRepository;
use App\Service\MessageGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthorController extends AbstractController
{

    /**
     * @Route("/author", name="read_author", methods={"GET"})
     */
    public function readAuthor(AuthorRepository $authorRepository): Response
    {
        $authors = $authorRepository->findBy([], ['lastname'=>'ASC']);
    
        return $this->render('author/author_read.html.twig', [
            'authors' => $authors,
        ]);
    }

    /**
     * @Route("/admin/author", name="admin_read_author",  methods={"GET"})
     */
    public function readAuthorAdmin(AuthorRepository $authorRepository): Response
    {
        $authors = $authorRepository->findAll();

        return $this->render('author/admin_read_author.html.twig', [
            'authors' => $authors,
        ]);
    }

     /**
     * @Route("/author/author/{slug}", name="show_author_book", methods={"GET"})
     */
    public function ShowAuthorBook(Author $author = null, GroupRepository $groupRepository): Response
    {
        if ($author === null) {
            throw $this->createNotFoundException('Auteur non trouvé.');
        }

        $groupBooks = $groupRepository->findBookByAuthor($author);

        return $this->render('author/author_show_book.html.twig', [
            'author' => $author,
            'groupBooks'=> $groupBooks
        ]);
    }

    /**
     * @Route("/admin/create/author", name="admin_create_author",   methods={"GET", "POST"})
     */
    public function createAuthor(Request $request, MessageGenerator $messageGenerator)
    {
         $author = new Author();

         $form= $this->createForm(AuthorType::class, $author);
 
         $form->handleRequest($request);
 
         if ($form->isSubmitted() && $form->isValid()) {
             
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->persist($author);
             $entityManager->flush();
 
             $this->addFlash('success', $messageGenerator->getHappyMessage());

             return $this->redirectToRoute('admin_read_author');
         }
 
         return $this->render('author/admin_form_author.html.twig', [
         'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/update/author/{id<\d+>}", name="admin_update_author", methods={"GET", "PATCH"})
     */
    public function updateAuthor(Author $author, Request $request, MessageGenerator $messageGenerator)
    {
        if (null === $author) {
            throw $this->createNotFoundException('Livre non trouvé.');
        }

        $form = $this->createForm(AuthorType::class, $author);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $author->setUpdatedAt(new \DateTime());

            $entityManager = $this->getDoctrine()->getManager();
    
            $entityManager->flush();

            $this->addFlash('success', $messageGenerator->getHappyMessage());

            return $this->redirectToRoute('admin_read_author');
        }

        return $this->render('author/admin_form_author.html.twig', [
            'author' => $author,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/delete/author/{id<\d+>}", name="admin_delete_author", methods={"GET", "DELETE"})
     */
    public function deleteAuthor(Author $author = null, EntityManagerInterface $entityManager, Request $request, MessageGenerator $messageGenerator)
    {
        if (null === $author) {
            throw $this->createNotFoundException('Livre non trouvé.');
        }

        $entityManager->remove($author);
        $entityManager->flush();

        $this->addFlash('success', $messageGenerator->getHappyMessage());

        return $this->redirectToRoute('admin_read_author');
    }
}

