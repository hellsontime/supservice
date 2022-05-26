<?php

namespace App\Service;

use App\Entity\User;

interface TicketStatusServiceInterface
{
    public function updateTicketStatus(int $ticketId, User $user, string $status);
}