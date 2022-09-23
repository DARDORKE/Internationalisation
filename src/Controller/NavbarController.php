<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class NavbarController extends AbstractController
{
    #[Route('/navbar', name: 'app_navbar')]
    public function index(TranslatorInterface $translator): Response
    {
        

        return $this->render('navbar/index.html.twig', [
            'controller_name' => 'NavbarController',
        ]);
    }
}
