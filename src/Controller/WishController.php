<?php

namespace App\Controller;

use App\Repository\WishRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishController extends AbstractController
{
    /**
     * @Route("/wishes", name="wish_list")
     */
    public function list(WishRepository $wishRepository): Response
    {
        $wishes = $wishRepository->findAll();
        return $this->render('wish/wish.html.twig', [
            //les passe à Twig
            "wishes" => $wishes
        ]);
    }

    /**
     * @Route("/wishes/detail/{id}", name="wish_detail")
     */
    public function detail(int $id, WishRepository $wishRepository): Response
    {
        $details = $wishRepository->find($id); 
        return $this->render('wish/detail.html.twig', [
            "details" => $details
        ]);
    }
}