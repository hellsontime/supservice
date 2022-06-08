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
        ]);

        $data = $ticket->getMessages()->toArray();

        return $this->response($data);
    }

    public function createTicketMessage(int $ticketId, int $userId, array $requestBody): JsonResponse
    {
        $ticket = $this->_ticketRepository->findOneBy([
            'id' => $ticketId,
        ]);

        $this->_messageRepository->createTicketMessage($ticketId, $userId, $requestBody, $ticket);

        return $this->response([
            'message' => 'Ticket message successfully created'
        ], 201);
    }

    public function getTicketMessageById(int $ticketId, int $messageId, int $userId): JsonResponse
    {
        $message = $this->_messageRepository->findOneBy([
            'id' => $messageId,
        ]);

        return $this->response($message->jsonSerialize());
    }

    public function updateTicketMessage(int $ticketId, int $messageId, int $userId, array $requestBody): JsonResponse
    {
        $message = $this->_messageRepository->findOneBy([
            'id' => $messageId,
        ]);

        if ($message->getSenderUserId() !== $userId) {
            return $this->response([
                'message' => 'You cannot update this message'
            ], 403);
        }

        $this->_messageRepository->updateTicketMessage($requestBody, $message);

        return $this->response([
            'message' => 'Message successfully updated'
        ], 201);
    }

    public function deleteTicketMessage(int $ticketId, int $messageId, int $userId): JsonResponse
    {
        $message = $this->_messageRepository->findOneBy([
            'id' => $messageId,
        ]);

        if ($message->getSenderUserId() !== $userId) {
            return $this->response([
                'message' => 'You cannot delete this message'
            ], 403);
        }

        $this->_messageRepository->deleteTicketMessage($message);

        return $this->response([
            'message' => 'Message successfully deleted'
        ], 201);
    }
}