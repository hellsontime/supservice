<?php

namespace App\Repository;

use App\Entity\Ticket;

interface TicketRepositoryInterface
{
    public function createTicket(array $requestBody);
    public function updateUserTicket(array $requestBody, Ticket $ticket);
    public function deleteUserTicket(Ticket $ticket);
    public function countSupportOpenedTickets(int $supportId);
}