<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontendController extends AbstractController
{
    /**
     * @Route("/", name="frontend_home")
     */
    public function home(): Response
    {
        return $this->render('frontend/home.html.twig', [
            'controller_name' => 'FrontendController',
        ]);
    }

    /**
     * @Route("/about", name="frontend_about")
     */
    public function about(): Response
    {
        return $this->render('frontend/about.html.twig', [
            'controller_name' => 'FrontendController',
        ]);
    }

    /**
     * @Route("/shop", name="frontend_shop")
     */
    public function shop(): Response
    {
        return $this->render('frontend/shop.html.twig', [
            'controller_name' => 'FrontendController',
        ]);
    }

    /**
     * @Route("/contact", name="frontend_contact")
     */
    public function contact(): Response
    {
        return $this->render('frontend/contact.html.twig', [
            'controller_name' => 'FrontendController',
        ]);
    }

    /**
     * @Route("/shop-single", name="frontend_shop-single")
     */
    public function shopSingle(): Response
    {
        return $this->render('frontend/shop-single.html.twig', [
            'controller_name' => 'FrontendController',
        ]);
    }
}
