<?php

namespace App\Controller;

use App\Entity\Book;
use App\Entity\Review;
use App\Form\ReviewType;
use App\Repository\ReviewRepository;
use App\Service\MessageGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReviewController extends AbstractController
{
      /**
     * @Route("/admin/review", name="admin_read_review",  methods={"GET"})
     */
    public function readReviewAdmin(ReviewRepository $reviewRepository): Response
    {
        $reviews = $reviewRepository->findAll();

        return $this->render('review/admin_read_review.html.twig', [
            'reviews' => $reviews,
        ]);
    }


    /**
     * @Route("/review/{id<\d+>}", name="show_review", methods={"GET"})
     */
    public function show(Book $book, ReviewRepository $reviewRepository): Response
    {
        $reviews = $reviewRepository->findReviewByBook($book);

        return $this->render('review/review_show.html.twig', [
            'reviews' => $reviews,
        ]);
    }

    /**
     * @Route("/admin/create/review", name="admin_create_review",  methods={"GET", "POST"})
     */
    public function createReview(Request $request, MessageGenerator $messageGenerator)
    {
         $review = new Review();

         $form= $this->createForm(ReviewType::class, $review);
 
         $form->handleRequest($request);
 
         if ($form->isSubmitted() && $form->isValid()) {
             
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->persist($review);
             $entityManager->flush();
 
             $this->addFlash('success', $messageGenerator->getHappyMessage());

             return $this->redirectToRoute('admin_read_review');
         }
 
         return $this->render('review/admin_form_review.html.twig', [
         'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/update/review/{id<\d+>}", name="admin_update_review", methods={"GET", "PATCH"})
     */
    public function updateReview(Review $review, Request $request, MessageGenerator $messageGenerator)
    {
        if (null === $review) {
            throw $this->createNotFoundException('Genre non trouvé.');
        }

        $form = $this->createForm(ReviewType::class, $review);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $review->setUpdatedAt(new \DateTime());

            $entityManager = $this->getDoctrine()->getManager();
    
            $entityManager->flush();

            $this->addFlash('success', $messageGenerator->getHappyMessage());

            return $this->redirectToRoute('admin_read_review');
        }

        return $this->render('review/admin_form_review.html.twig', [
            'review' => $review,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/delete/review/{id<\d+>}", name="admin_delete_review", methods={"GET", "DELETE"})
     */
    public function deleteReview(Review $review = null, EntityManagerInterface $entityManager, Request $request, MessageGenerator $messageGenerator)
    {
        if (null === $review) {
            throw $this->createNotFoundException('Genre non trouvé.');
        }

        $entityManager->remove($review);
        $entityManager->flush();

        $this->addFlash('success', $messageGenerator->getHappyMessage());

        return $this->redirectToRoute('admin_read_review');
    }
}
