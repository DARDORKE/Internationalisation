<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class WelcomeController extends AbstractController
{
    #[Route('/hello', name: 'app_welcome')]
    public function index(TranslatorInterface $translator): Response
    {
        $welcome = $translator->trans('HelloWorld');


        return $this->render('welcome/index.html.twig', [
            'welcome' => $welcome,
        ]);
    }
}
