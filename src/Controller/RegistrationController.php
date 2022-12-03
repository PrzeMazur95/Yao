<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RegistrationController extends AbstractController
{
    #[Route('/registration', name: 'registration')]
    public function index(): Response
    {
        return $this->render(
            'registration.html.twig'
        );
    }
}