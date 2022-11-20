<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\UserRepository;
use App\Entity\User;

class UserController extends AbstractController
{
    public function index(UserRepository $repo): Response
    {
        $user = $repo->findBy([]);
        return $this->json($user);
    }
}