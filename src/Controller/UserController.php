<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/UserController.php',
        ]);
    }

    /**
     * @Route("/api/list", name="list")
     */
    public function list(): Response
    {
         $user=[
             'id'=>'00001',
             'username'=>'manitra',
             'password'=>'admin123',
             'name'=>'Raoilison Manitra Berthon',
             'age'=>27,
             
         ];
        return $this->json([
            'message' => 'user',
            'data' => $user,
            'code'=>200,
        ]);
    }
}
