<?php

namespace App\Controller;

use App\Requests\StoreTicketMessageRequest;
use App\Service\MessageServiceInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class MessageController
 * @package App\Controller
 * @Route("/api")
 */
class MessageController extends BaseController
{
    private MessageServiceInterface $_messageService;
    private Security $_security;

    public function __construct(MessageServiceInterface $messageService, Security $security)
    {
        $this->_messageService = $messageService;
        $this->_security = $security;
    }

    /**
     * @Route("/tickets/{ticketId}/messages", name="messages-get", methods={"GET"})
     */
    public function index(int $ticketId)
    {
        $userId = $this->_security->getUser()->getId();

        return $this->_messageService->getTicketMessages($ticketId, $userId);
    }

    /**
     * @Route("/tickets/{ticketId}/messages", name="messages-post", methods={"POST"})
     */
    public function store(StoreTicketMessageRequest $request, int $ticketId)
    {
        $userId = $this->_security->getUser()->getId();
        $requestBody = $this->getRequestBody($request);

        return $this->_messageService->createTicketMessage($ticketId, $userId, $requestBody);
    }

    /**
     * @Route("/tickets/{ticketId}/messages/{messageId}", name="message-get", methods={"GET"})
     */
    public function show(int $ticketId, int $messageId)
    {
        $userId = $this->_security->getUser()->getId();

        return $this->_messageService->getTicketMessageById($ticketId, $messageId, $userId);
    }

    /**
     * @Route("/tickets/{ticketId}/messages/{messageId}", name="messages-put", methods={"PUT"})
     */
    public function update(int $ticketId, int $messageId)
    {
        $userId = $this->_security->getUser()->getId();

        return $this->_messageService->updateTicketMessage($ticketId, $messageId, $userId);
    }

    /**
     * @Route("/tickets/{ticketId}/messages/{messageId}", name="message-delete", methods={"DELETE"})
     */
    public function destroy(int $ticketId, int $messageId)
    {
        $userId = $this->_security->getUser()->getId();

        return $this->_messageService->deleteTicketMessage($ticketId, $messageId, $userId);
    }
}