<?php

namespace App\Repository;

use App\Entity\Message;
use App\Entity\Ticket;

interface MessageRepositoryInterface
{
    public function createTicketMessage(int $ticketId, int $userId, array $requestBody, Ticket $ticket);
    public function updateTicketMessage(array $requestBody, Message $message);
    public function deleteTicketMessage(Message $message);
}