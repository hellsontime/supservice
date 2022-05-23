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
        $this->_ticketRepository->createTicket($requestBody);

        return $this->response([
            "message" => "Ticket created successfully"
        ], 201);
    }

    public function getUserTicketById(int $userId, int $ticketId): JsonResponse
    {
        $ticket = $this->_ticketRepository->getUserTicketById($ticketId);

        return $this->response($ticket->jsonSerialize());
    }

    public function updateUserTicket(array $requestBody, int $ticketId): JsonResponse
    {
        $ticket = $this->_ticketRepository->findOneBy([
            'id' => $ticketId,
            'user_id' => $requestBody['userId']
        ]);

        $this->_ticketRepository->updateUserTicket($requestBody, $ticket);

        return $this->response(['message' => 'Ticket successfully updated']);
    }

    public function deleteUserTicket(int $userId, int $ticketId): JsonResponse
    {
        $ticket = $this->_ticketRepository->findOneBy([
            'ticket_id' => $ticketId,
            'user_id' => $userId
        ]);

        $this->_ticketRepository->deleteUserTicket($ticket);

        return $this->response([
            'message' => 'Ticket successfully deleted'
        ]);
    }
}