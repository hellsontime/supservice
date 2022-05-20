<?php

namespace App\Repository;

use App\Entity\Message;
use App\Entity\Ticket;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Message|null find($id, $lockMode = null, $lockVersion = null)
 * @method Message|null findOneBy(array $criteria, array $orderBy = null)
 * @method Message[]    findAll()
 * @method Message[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessageRepository extends ServiceEntityRepository implements MessageRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Message::class);
    }

    public function createTicketMessage(int $ticketId, int $userId, array $requestBody, Ticket $ticket): void
    {
        $message = new Message();

        $message->setTicket($ticket);
        $message->setTicketId($ticketId);
        $message->setSenderUserId($userId);
        $message->setContent($requestBody['content']);

        $this->getEntityManager()->persist($message);
        $this->getEntityManager()->flush();
    }

    public function getTicketMessageById(int $ticketId, int $messageId, int $userId)
    {
        // TODO: Implement getTicketMessageById() method.
    }

    public function updateTicketMessage(int $ticketId, int $messageId, int $userId, array $requestBody)
    {
        // TODO: Implement updateTicketMessage() method.
    }

    public function deleteTicketMessage(int $ticketId, int $messageId, int $userId)
    {
        // TODO: Implement deleteTicketMessage() method.
    }
}