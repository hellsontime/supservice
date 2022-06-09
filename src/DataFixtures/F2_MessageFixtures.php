<?php

namespace App\DataFixtures;

use App\Entity\Message;
use App\Entity\Ticket;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

class F2_MessageFixtures extends BaseFixture
{
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function loadData(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $this->createMany(Message::class, 5, function (Message $message, int $count) use ($i)
            {
                $ticketSupportId = $this->getReference(Ticket::class.'_'.$i)->getSupportId();
                $ticketUserId = $this->getReference(Ticket::class.'_'.$i)->getUserId();

                $possibleSenders = [$ticketSupportId, $ticketUserId];

                $message->setContent($this->faker->sentence(12));
                $message->setSenderUserId($count % 2 == 0 ? $possibleSenders[0] : $possibleSenders[1]);
                $message->setTicket($this->getReference(Ticket::class.'_'.$i));

            });
        }

        $manager->flush();
    }
}