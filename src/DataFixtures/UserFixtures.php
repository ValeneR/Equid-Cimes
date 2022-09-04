<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private  UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher) 
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Création d’un utilisateur de type “membre” (= auteur)
        $member = new User();
        $member->setUsername('membre');
        $member->setRoles(['ROLE_CONTRIBUTOR']);
        $hashedPassword = $this->passwordHasher->hashPassword(
            $member,
            'membrepassword'
        );
        $member->setPassword($hashedPassword);
        $member->setName('histoMember');
        $manager->persist($member);
        $this->addReference('user_' . 'histoMember', $member);

        // Création d’un utilisateur de type “administrateur”
        $admin = new User();
        $admin->setUsername('admin');
        $admin->setRoles(['ROLE_ADMIN']);
        $hashedPassword = $this->passwordHasher->hashPassword(
            $admin,
            'adminpassword'
        );
        $admin->setPassword($hashedPassword);
        $admin->setName('histoAdmin');
        $manager->persist($admin);
        $this->addReference('user_' . 'histoAdmin', $admin);

        // Sauvegarde des 2 nouveaux utilisateurs :
        $manager->flush();
    }
}
