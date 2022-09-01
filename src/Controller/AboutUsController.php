<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutUsController extends AbstractController
{
    #[Route('/about/us', name: 'home_aboutUs')]
    public function index(): Response
    {
        return $this->render('about_us/aboutUs.html.twig', [
            'controller_name' => 'AboutUsController',
        ]);
    }
}
