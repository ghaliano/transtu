<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Service\UserManager;

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

    /**
     * @Route("/create")
     */
    public function create ( Request $request, UserManager $userManager  ){
        $data = json_decode($request->getContent(), true);
        $user = new User();
        $user -> setFirstname($data["firstname"]);
        $user -> setLastname($data["lastname"]);
        $user -> setEmail($data["email"]);
        $user -> setPlainPassword($data["plainPassword"]);

        $userManager->signUp($user);

        return $this->json($user);
    }
    
}
