<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\UserRepository;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/create', name: 'create')]
    public function create(ManagerRegistry $doctrine)
    {
        $entityManagar = $doctrine->getManager();

        $user = new User();

        $user->setFirstName(3);

        return $this->json($user);
    }
}