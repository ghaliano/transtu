<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;

/**
 * @Route("/api/users")
 */
class UserController extends AbstractController{
    /**
     * @Route("/")
     */
    public function index ( Request $request ){
        $users = $this->getDoctrine()
        ->getRepository(User::class)
        ->findAll();

        return $this->json($users);
    }
    
}
