<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker\Factory;
use Faker\Generator;

class UserFixtures extends BaseFixture
{
    private UserPasswordHasherInterface $_userPasswordHasher;
    private Generator $faker;

    public function __construct(UserPasswordHasherInterface $userPasswordHasher)
    {
        $this->_userPasswordHasher = $userPasswordHasher;
        $this->faker = Factory::create();
    }

    public function loadData(ObjectManager $manager)
    {
        $this->createMany(User::class, 25, function (User $user, int $count)
        {
            $user->setEmail($this->faker->email);
            $user->setPassword($this->_userPasswordHasher->hashPassword(
                $user,
                'password')
            );

            if ($count < 5){
                $user->setRoles(['ROLE_USER', 'ROLE_SUPPORT']);
            } else {
                $user->setRoles(['ROLE_USER']);
            }
        });

        $manager->flush();
    }
}
