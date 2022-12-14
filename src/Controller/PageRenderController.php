<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageRenderController extends AbstractController
{
    public function index(): Response
    {
        return $this->render(
            'main.html.twig'
        );
    }

    public function welcome(): Response
    {
        return $this->render(
            'welcome/welcome.html.twig'
        );
    }
}