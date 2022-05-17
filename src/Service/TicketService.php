<?php

namespace App\Service;

use App\Repository\TicketRepositoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;

class TicketService extends BaseService implements TicketServiceInterface
{
    private TicketRepositoryInterface $_ticketRepository;

    public function __construct(TicketRepositoryInterface $ticketRepository)
    {
        $this->_ticketRepository = $ticketRepository;
    }

    public function getUserTickets(int $userId): JsonResponse
    {
        $tickets = $this->_ticketRepository->getUserTickets($userId);

        return $this->response($tickets);
    }

    public function createTicket(array $requestBody): JsonResponse
    {
        $data = $this->_ticketRepository->createTicket($requestBody);

        return $this->response($data, 201);
    }

    public function getUserTicketById(int $userId, int $ticketId): JsonResponse
    {
        $ticket = $this->_ticketRepository->getUserTicketById($ticketId);

        if (!$ticket || $ticket->getUserId() !== $userId) {
            return $this->response([
                'message' => "Ticket not found"
            ], 404);
        }

        return $this->response($ticket->jsonSerialize());
    }
}