<?php

namespace App\Repository;

use App\Entity\Ticket;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;

/**
 * @method Ticket|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ticket|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ticket[]    findAll()
 * @method Ticket[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TicketRepository extends ServiceEntityRepository implements TicketRepositoryInterface
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Ticket::class);
    }

    public function getUserTickets(int $userId): array
    {
        return $this->findBy(['user_id' => $userId]);
    }

    public function createTicket(array $requestBody): array
    {
        $ticket = new Ticket();

        $ticket->setUserId($requestBody['userId']);
        $ticket->setSupportId($requestBody['supportId']);
        $ticket->setTitle($requestBody['title']);
        $ticket->setDescription($requestBody['description']);
        $ticket->setStatus($requestBody['status']);

        $this->getEntityManager()->persist($ticket);
        $this->getEntityManager()->flush();

        return ["message" => "Ticket created successfully"];
    }

    public function getUserTicketById(int $ticketId)
    {
        return $this->find($ticketId);
    }
}