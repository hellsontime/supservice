<?php

namespace App\Repository;

interface TicketRepositoryInterface
{
    public function getUserTickets(int $userId);
    public function createTicket(array $requestBody);
    public function getUserTicketById(int $ticketId);
}