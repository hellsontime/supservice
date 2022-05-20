<?php

namespace App\Service;

interface MessageServiceInterface
{
    public function getTicketMessages(int $ticketId, int $userId);
    public function createTicketMessage(int $ticketId, int $userId, array $requestBody);
    public function getTicketMessageById(int $ticketId, int $messageId, int $userId);
    public function updateTicketMessage(int $ticketId, int $messageId, int $userId, array $requestBody);
    public function deleteTicketMessage(int $ticketId, int $messageId, int $userId);
}