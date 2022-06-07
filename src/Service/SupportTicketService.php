<?php

namespace App\Service;

use App\Repository\TicketRepositoryInterface;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

class SupportTicketService extends BaseService implements SupportTicketServiceInterface
{
    private TicketRepositoryInterface $_ticketRepository;

    public function __construct(TicketRepositoryInterface $ticketRepository)
    {
        $this->_ticketRepository = $ticketRepository;
    }

    public function getSupportTickets(int $userId): JsonResponse
    {
        $tickets = $this->_ticketRepository->findBy(['support_id' => $userId]);

        return $this->response($tickets);
    }

    public function getSupportTicketById(int $ticketId): JsonResponse
    {
        $ticket = $this->_ticketRepository->find($ticketId);

        return $this->response($ticket->jsonSerialize());
    }
}