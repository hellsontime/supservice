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
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ticket::class);
    }

    public function getUserTickets(int $userId): array
    {
        return $this->findBy(['user_id' => $userId]);
    }

    public function createTicket(array $requestBody): void
    {
        $ticket = new Ticket();

        $ticket->setUserId($requestBody['userId']);
        $ticket->setSupportId($requestBody['supportId']);
        $ticket->setTitle($requestBody['title']);
        $ticket->setDescription($requestBody['description']);
        $ticket->setStatus('opened');

        $this->getEntityManager()->persist($ticket);
        $this->getEntityManager()->flush();
    }

    public function getUserTicketById(int $ticketId): Ticket|null
    {
        return $this->find($ticketId);
    }

    public function updateUserTicket(array $requestBody, Ticket $ticket): void
    {
        $ticket->setTitle($requestBody['title']);
        $ticket->setDescription($requestBody['description']);
        $this->getEntityManager()->flush();
    }

    public function deleteUserTicket(Ticket $ticket): void
    {
        $this->getEntityManager()->remove($ticket);
        $this->getEntityManager()->flush();
    }
}