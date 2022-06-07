<?php

namespace App\Service;

interface UserTicketServiceInterface
{
    public function getUserTickets(int $userId);
    public function createTicket(array $requestBody);
    public function getUserTicketById(int $ticketId);
    public function updateUserTicket(array $requestBody, int $ticketId);
    public function deleteUserTicket(int $userId, int $ticketId);
}