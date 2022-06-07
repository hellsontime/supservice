<?php

namespace App\Repository;

use App\Entity\Ticket;

interface TicketRepositoryInterface
{
    public function getUserTickets(int $userId);
    public function getSupportTickets(int $supportId);
    public function createTicket(array $requestBody);
    public function getUserTicketById(int $ticketId);
    public function updateUserTicket(array $requestBody, Ticket $ticket);
    public function deleteUserTicket(Ticket $ticket);
    public function countSupportOpenedTickets(int $supportId);
}