<?php

namespace App\Service;

interface TicketServiceInterface
{
    public function getUserTickets(int $userId);
    public function createTicket(array $requestBody);
    public function getUserTicketById(int $userId, int $ticketId);
    public function updateUserTicket(array $requestBody, int $ticketId);
    public function deleteUserTicket(int $userId, int $ticketId);
}