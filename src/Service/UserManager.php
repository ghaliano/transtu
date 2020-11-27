<?php

namespace App\Service ;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class UserManager {

    public function __construct(UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManager)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->entityManager = $entityManager;
    }

    public function signUp (User $user)
    {
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->passwordEncoder->encodePassword($user, $user->getPlainPassword()));
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }

    public function updateUser(User $user, $data = [])
    {
        empty($data['firstname']) ? true : $user->setFirstName($data['firstname']);
        empty($data['lastname']) ? true : $user->setLastName($data['lastname']);
        empty($data['email']) ? true : $user->setEmail($data['email']);
        empty($data['plainPassword']) ? true : $user->setPlainPassword($data['plainPassword']);
        
        $this->entityManager->persist($user);
        $this->entityManager->flush();
        
        return $user;
    }

}
