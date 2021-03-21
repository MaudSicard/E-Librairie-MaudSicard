<?php

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{/**
     * @Route("/cart_add/{id<\d+>}", name="cart_add",  methods={"GET"})
     */
    public function cartAdd($id, Request $request, SessionInterface $session, BookRepository $bookRepository)
    {
        $book = $bookRepository->find($id);

        if (null === $book) {
            throw $this->createNotFoundException('Livre non trouvé');
        }

        $cart = $session->get('cart', []);
        $cart[] = $id;
        $session->set('cart', $cart);

        $this->addFlash('success', 'Article ajouté au panier');

        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/cart/list", name="cart",  methods={"GET"})
     */

     public function cartList(SessionInterface $session, BookRepository $bookRepository)
     {
        $cartSession = $session->get('cart', []);
        $cart = array_count_values($cartSession); 

        if ($cart == null)
        {
            $this->addFlash('success', 'Votre panier est vide');
            return $this->redirectToRoute('read_gender');
        }
        
        $booksList = [];

        foreach ($cart as $id=>$quantity)
        {
            $book = $bookRepository->find($id);
            array_push($booksList, $book);
        }
          
        return $this->render('cart/cart_list.html.twig', 
        [
            'booksList'=> $booksList,
            'cart'=> $cart,
            'quantity'=> $quantity
        ]);
     }

     /**
     *  @Route("/cart/remove", name="cart_remove", methods="POST")
     */
    public function remove(SessionInterface $session)
    {
        $session->remove('cart');

        $this->addFlash('success', 'Panier vidé');

        return $this->redirectToRoute('read_gender');
    }
}
