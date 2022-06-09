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
        parent::__construct();

        $this->faker = Factory::create();
    }

    public function loadData(ObjectManager $manager)
    {
        $fistUserId = $this->getReference(User::class.'_'.$this->number_of_supports)->getId();

        $this->createMany(Ticket::class, $this->number_of_users * $this->number_of_tickets_per_user, function (Ticket $ticket, int $count) use ($fistUserId)
        {
            $ticket->setTitle($this->faker->sentence(3));
            $ticket->setDescription($this->faker->sentence(9));

            $ticket->setUserId(
                intdiv($fistUserId * $this->number_of_tickets_per_user + $count, $this->number_of_tickets_per_user)
            );
            $ticket->setSupportId(
                $this->getReference(
                    User::class.'_'.intdiv($count, $this->number_of_tickets_per_support)
                )->getId()
            );
            $ticket->setStatus(['opened', 'closed', 'frozen'][rand(0,2)]);
        });

        $manager->flush();
    }
}