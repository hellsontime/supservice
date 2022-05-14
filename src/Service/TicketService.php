<?php

namespace App\Service;

use App\Repository\TicketRepositoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class TicketService implements TicketServiceInterface
{
    private TicketRepositoryInterface $_ticketRepository;

    public function __construct(TicketRepositoryInterface $ticketRepository)
    {
        $this->_ticketRepository = $ticketRepository;
    }

    public function getUserTickets(int $userId)
    {
        $tickets = $this->_ticketRepository->findAll();

        return $this->response($tickets);
    }

    public function createTicket(array $requestBody)
    {
        // TODO: Implement createTicket() method.
    }

    /**
     * Returns a JSON response
     *
     * @param array $data
     * @param int $status
     * @param array $headers
     * @return JsonResponse
     */
    public function response(array $data, int $status = 200, array $headers = []): JsonResponse
    {
        return new JsonResponse($data, $status, $headers);
    }
}