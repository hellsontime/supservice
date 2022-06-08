<?php

namespace App\DataFixtures;

use App\Entity\Message;
use App\Entity\Ticket;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

class TicketFixtures extends BaseFixture
{
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function loadData(ObjectManager $manager)
    {
        $this->createMany(Ticket::class, 50, function (Ticket $ticket, int $count) use ($manager)
        {
            $ticket->setTitle('hey');
            $ticket->setDescription('hey');

            $ticket->setUserId(rand(1,5));
            $ticket->setSupportId(rand(5, 25));
            $ticket->setStatus(['opened', 'closed', 'frozen'][0]);
        });

        $manager->flush();
    }
}