<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Service\UserManager;
use Symfony\Component\VarDumper\VarDumper;

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

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {

        $data = json_decode($request->getContent(), true);
        // var_dump($data);

        $user -> setFirstname($data["firstname"]);
        $user -> setLastname($data["lastname"]);
        $user -> setEmail($data["email"]);
        $user -> setPlainPassword($data["plainPassword"]);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();
        return $this->json($user);
    }
    
}
