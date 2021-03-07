<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Form\GroupType;
use App\Repository\BookRepository;
use App\Repository\GroupRepository;
use App\Service\MessageGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class BookController extends AbstractController
{
    /**
     * @Route("search/book", name = "show_book_search")
     */
     public function searchBook(Request $request, GroupRepository $groupRepository)
    {
        $search= $request->query->get('search');

        $groupBooks = $groupRepository->findBookBySearch($search);
        
        return $this->render('book/book_show_search.html.twig', [
            'groupBooks' => $groupBooks,
        ]);
    }


    /**
     * @Route("/admin", name="admin_read_book")
     */
    public function readBook(GroupRepository $groupRepository): Response
    {
        $books = $groupRepository->findBook();

        return $this->render('book/admin_read_book.html.twig', [
            'books' => $books,
        ]);
    }

    /**
     * @Route("/admin/create/book", name="admin_create_book")
     */
    public function createBook(Request $request, MessageGenerator $messageGenerator)
    {
         $book = new Book();

         $form= $this->createForm(BookType::class, $book);

         $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {
            
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->persist($book);
             $entityManager->flush();
 
             $this->addFlash('success', $messageGenerator->getHappyMessage());
             
             return $this->redirectToRoute('admin_create_group');
         }

         return $this->render('book/admin_form_book.html.twig', [
         'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/update/book/{id<\d+>}", name="admin_update_book", methods={"GET", "POST"})
     */
    public function updateBook(Book $book, Request $request, MessageGenerator $messageGenerator)
    {
        if (null === $book) {
            throw $this->createNotFoundException('Livre non trouvé.');
        }

        $form = $this->createForm(BookType::class, $book);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $book->setUpdatedAt(new \DateTime());

            $entityManager = $this->getDoctrine()->getManager();
    
            $entityManager->flush();

            $this->addFlash('success', $messageGenerator->getHappyMessage());

            return $this->redirectToRoute('admin_create_group');
        }

        return $this->render('book/admin_form_book.html.twig', [
            'book' => $book,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/delete/book/{id<\d+>}", name="admin_delete_book", methods={"GET", "POST"})
     */
    public function deleteBook(Book $book = null, EntityManagerInterface $entityManager, Request $request, MessageGenerator $messageGenerator)
    {
        if (null === $book) {
            throw $this->createNotFoundException('Livre non trouvé.');
        }

        $entityManager->remove($book);
        $entityManager->flush();

        $this->addFlash('success', $messageGenerator->getHappyMessage());

        return $this->redirectToRoute('admin_read_book');
    }
}
