<?php

namespace App\Service;

interface TicketServiceInterface
{
    public function getUserTickets(int $userId);
    public function createTicket(array $requestBody);
}