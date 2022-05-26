<?php

namespace App\Repository;

use App\Entity\Ticket;

interface TicketStatusRepositoryInterface
{
    public function updateTicketStatus(string $status, Ticket $ticket);
}