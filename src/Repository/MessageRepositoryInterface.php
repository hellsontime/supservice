<?php

namespace App\Repository;

use App\Entity\Ticket;

interface MessageRepositoryInterface
{
    public function createTicketMessage(int $ticketId, int $userId, array $requestBody, Ticket $ticket);
    public function updateTicketMessage(int $ticketId, int $messageId, int $userId, array $requestBody);
    public function deleteTicketMessage(int $ticketId, int $messageId, int $userId);
}