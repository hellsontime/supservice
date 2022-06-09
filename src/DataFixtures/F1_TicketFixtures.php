<?php

namespace App\DataFixtures;

use App\Entity\Ticket;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

class F1_TicketFixtures extends BaseFixture
{
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function loadData(ObjectManager $manager)
    {
        $fistUserId = $this->getReference(User::class.'_5')->getId();

        $this->createMany(Ticket::class, 25, function (Ticket $ticket, int $count) use ($fistUserId)
        {
            $ticket->setTitle($this->faker->sentence(3));
            $ticket->setDescription($this->faker->sentence(9));

            $ticket->setUserId($fistUserId + $count);
            $ticket->setSupportId($this->getReference(User::class.'_'.intdiv($count, 5))->getId());
            $ticket->setStatus(['opened', 'closed', 'frozen'][rand(0,2)]);
        });

        $manager->flush();
    }
}