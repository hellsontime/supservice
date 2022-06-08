<?php

namespace App\DataFixtures;

use App\Entity\Message;
use App\Entity\Ticket;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

class ZMessageFixtures extends BaseFixture
{
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function loadData(ObjectManager $manager)
    {
        $this->createMany(Message::class, 250, function (Message $message, int $count)
        {
            $message->setContent('hey');
            $message->setSenderUserId(1);
            $message->setTicket($this->getReference(Ticket::class.'_0'));

        });

        $manager->flush();
    }
}