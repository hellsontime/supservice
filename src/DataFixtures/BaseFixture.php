<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

abstract class BaseFixture extends Fixture
{
    private array|false $config;

    protected int $number_of_supports;
    protected int $number_of_users;
    protected int $number_of_tickets_per_user;
    protected int $number_of_tickets_per_support;
    protected int $number_of_messages_per_ticket;

    /** @var ObjectManager */
    private ObjectManager $manager;

    public function __construct()
    {
        $this->config = parse_ini_file('config.ini');

        $this->number_of_supports = $this->config['number_of_supports'];
        $this->number_of_users = $this->config['number_of_users'];
        $this->number_of_tickets_per_user = $this->config['number_of_tickets_per_user'];
        $this->number_of_messages_per_ticket = $this->config['number_of_messages_per_ticket'];
        $this->number_of_tickets_per_support = intdiv($this->number_of_users * $this->number_of_tickets_per_user, $this->number_of_supports);
    }

    abstract protected function loadData(ObjectManager $manager);

    public function load(ObjectManager $manager)
    {
        $this->manager = $manager;
        $this->loadData($manager);
    }

    protected function createMany(string $className, int $count, callable $factory)
    {
        for ($i = 0; $i < $count; $i++) {
            $entity = new $className();
            $factory($entity, $i);
            $this->manager->persist($entity);
            // store for usage later as App\Entity\ClassName_#COUNT#
            $this->setReference($className . '_' . $i, $entity);
        }
    }
}