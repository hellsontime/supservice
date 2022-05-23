<?php

namespace App\Service;

use App\Repository\MessageRepositoryInterface;
use App\Repository\TicketRepositoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class MessageService extends BaseService implements MessageServiceInterface
{
    private MessageRepositoryInterface $_messageRepository;
    private TicketRepositoryInterface $_ticketRepository;

    public function __construct(MessageRepositoryInterface $messageRepository, TicketRepositoryInterface $ticketRepository)
    {
        $this->_messageRepository = $messageRepository;
        $this->_ticketRepository = $ticketRepository;
    }

    public function getTicketMessages(int $ticketId, int $userId): JsonResponse
    {
        $ticket = $this->_ticketRepository->findOneBy([
            'id' => $ticketId,
            'user_id' => $userId,
        ]);

        if (!$ticket) {
            return $this->response([
                'message' => 'Ticket not found'
            ], 404);
        }

        $data = $ticket->getMessages()->toArray();

        return $this->response($data);
    }

    public function createTicketMessage(int $ticketId, int $userId, array $requestBody): JsonResponse
    {
        $ticket = $this->_ticketRepository->findOneBy([
            'id' => $ticketId,
            'user_id' => $userId,
        ]);

        if (!$ticket) {
            return $this->response([
                'message' => 'Ticket not found'
            ], 404);
        }

        $this->_messageRepository->createTicketMessage($ticketId, $userId, $requestBody, $ticket);

        return $this->response([
            'message' => 'Ticket message successfully created'
        ], 201);
    }

    public function getTicketMessageById(int $ticketId, int $messageId, int $userId): JsonResponse
    {
        $ticket = $this->_ticketRepository->findOneBy([
            'id' => $ticketId,
            'user_id' => $userId,
        ]);

        if (!$ticket) {
            return $this->response([
                'message' => 'Ticket not found'
            ], 404);
        }

        $message = $this->_messageRepository->findOneBy([
            'id' => $messageId,
            'ticket_id' => $ticketId,
        ]);

        if (!$message) {
            return $this->response([
                'message' => 'Message not found'
            ], 404);
        }

        return $this->response($message->jsonSerialize());
    }

    public function updateTicketMessage(int $ticketId, int $messageId, int $userId, array $requestBody): JsonResponse
    {
        $ticket = $this->_ticketRepository->findOneBy([
            'id' => $ticketId,
            'user_id' => $userId,
        ]);

        if (!$ticket) {
            return $this->response([
                'message' => 'Ticket not found'
            ], 404);
        }

        $message = $this->_messageRepository->findOneBy([
            'id' => $messageId,
            'ticket_id' => $ticketId,
        ]);

        if (!$message) {
            return $this->response([
                'message' => 'Message not found'
            ], 404);
        }

        $this->_messageRepository->updateTicketMessage($requestBody, $message);

        return $this->response([
            'message' => 'Message successfully updated'
        ], 201);
    }

    public function deleteTicketMessage(int $ticketId, int $messageId, int $userId): JsonResponse
    {
        $ticket = $this->_ticketRepository->findOneBy([
            'id' => $ticketId,
            'user_id' => $userId,
        ]);

        if (!$ticket) {
            return $this->response([
                'message' => 'Ticket not found'
            ], 404);
        }

        $message = $this->_messageRepository->findOneBy([
            'id' => $messageId,
            'ticket_id' => $ticketId,
        ]);

        if (!$message) {
            return $this->response([
                'message' => 'Message not found'
            ], 404);
        }

        $this->_messageRepository->deleteTicketMessage($message);

        return $this->response([
            'message' => 'Message successfully deleted'
        ], 201);
    }
}