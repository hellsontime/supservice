<?php

namespace App\Controller;

use App\Requests\StoreTicketMessageRequest;
use App\Requests\UpdateTicketMessageRequest;
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
     * @param int $ticketId
     * @return mixed
     */
    public function index(int $ticketId)
    {
        $userId = $this->_security->getUser()->getId();

        return $this->_messageService->getTicketMessages($ticketId, $userId);
    }

    /**
     * @param StoreTicketMessageRequest $request
     * @param int $ticketId
     * @return mixed
     */
    public function store(StoreTicketMessageRequest $request, int $ticketId)
    {
        $userId = $this->_security->getUser()->getId();
        $requestBody = $this->getRequestBody($request);

        return $this->_messageService->createTicketMessage($ticketId, $userId, $requestBody);
    }

    /**
     * @param int $ticketId
     * @param int $messageId
     * @return mixed
     */
    public function show(int $ticketId, int $messageId)
    {
        $userId = $this->_security->getUser()->getId();

        return $this->_messageService->getTicketMessageById($ticketId, $messageId, $userId);
    }

    /**
     * @param UpdateTicketMessageRequest $request
     * @param int $ticketId
     * @param int $messageId
     * @return mixed
     */
    public function update(UpdateTicketMessageRequest $request, int $ticketId, int $messageId)
    {
        $userId = $this->_security->getUser()->getId();
        $requestBody = $this->getRequestBody($request);

        return $this->_messageService->updateTicketMessage($ticketId, $messageId, $userId, $requestBody);
    }

    /**
     * @param int $ticketId
     * @param int $messageId
     * @return mixed
     */
    public function destroy(int $ticketId, int $messageId)
    {
        $userId = $this->_security->getUser()->getId();

        return $this->_messageService->deleteTicketMessage($ticketId, $messageId, $userId);
    }
}