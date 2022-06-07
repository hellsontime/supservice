<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\TicketStatusRepositoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class TicketStatusService extends BaseService implements TicketStatusServiceInterface
{
    private TicketStatusRepositoryInterface $_ticketStatusRepository;

    public function __construct(TicketStatusRepositoryInterface $statusRepository)
    {
        $this->_ticketStatusRepository = $statusRepository;
    }

    public function updateTicketStatus(int $ticketId, User $user, string $status): JsonResponse
    {
        if (!in_array('ROLE_SUPPORT', $user->getRoles()) &&
            !in_array('ROLE_ADMIN', $user->getRoles())) {
            return $this->response([
                'message' => 'You does not have permissions to access this route'
            ], 403);
        }

        $ticket = $this->_ticketStatusRepository->findOneBy([
            'id' => $ticketId,
            'support_id' => $user->getId(),
        ]);

        if (!$ticket) {
            return $this->response([
                'message' => 'Ticket not found'
            ], 404);
        }

        $this->_ticketStatusRepository->updateTicketStatus($status, $ticket);

        return $this->response([
            'message' => 'Ticket status successfully updated'
        ], 201);
    }
}