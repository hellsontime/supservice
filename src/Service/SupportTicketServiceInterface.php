<?php

namespace App\Service;

interface SupportTicketServiceInterface
{
    public function getSupportTickets(int $userId);
    public function getSupportTicketById(int $ticketId);
}