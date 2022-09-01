<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home_home")
     */
    public function index()
    {
        return $this->render('home/home.html.twig');
    }

    /**
     * @Route("/about-us", name="main_aboutUs")
     */
    public function about()
    {
        return $this->render('home/aboutUs.html.twig');
    }
}