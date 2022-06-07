<?php

namespace App\Service;

use App\Repository\TicketRepositoryInterface;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserTicketService extends BaseService implements UserTicketServiceInterface
{
    private TicketRepositoryInterface $_ticketRepository;
    private UserRepository $_userRepository;

    public function __construct(TicketRepositoryInterface $ticketRepository, UserRepository $userRepository)
    {
        $this->_ticketRepository = $ticketRepository;
        $this->_userRepository = $userRepository;
    }

    public function getUserTickets(int $userId): JsonResponse
    {
        $tickets = $this->_ticketRepository->findBy(['user_id' => $userId]);

        return $this->response($tickets);
    }

    public function createTicket(array $requestBody): JsonResponse
    {
        $supportId = $this->getFreeSupport();

        if (!$supportId) {
            return $this->response([
                'message' => 'No supports available now'
            ], 403);
        }

        $requestBody['supportId'] = $supportId;

        $this->_ticketRepository->createTicket($requestBody);

        return $this->response([
            "message" => "Ticket created successfully"
        ], 201);
    }

    public function getUserTicketById(int $ticketId): JsonResponse
    {
        $ticket = $this->_ticketRepository->find($ticketId);

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

    /**
     * @return int|null
     * description: method to get a support with less opened tickets
     */
    private function getFreeSupport(): int|null
    {
        $supports = $this->_userRepository->findUsersByRole('ROLE_SUPPORT');

        if (!$supports) {
            return null;
        }

        $arr = [];

        foreach ($supports as $support) {
            $supportId = $support->getId();
            $arr[$supportId] = $this->_ticketRepository->countSupportOpenedTickets($supportId);
        }

        asort($arr);

        return  array_key_first($arr);
    }
}