<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\UserRepository;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;

class UserController extends AbstractController
{

    public function create(ManagerRegistry $doctrine)
    {
        $entityManagar = $doctrine->getManager();

        $user = new User();

        $user->setFirstName(3);

        return $this->json($user);
    }
}