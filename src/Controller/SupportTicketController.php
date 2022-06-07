<?php

namespace App\Controller;

use App\Service\SupportTicketServiceInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;

/**
 * Class SupportTicketController
 * @package App\Controller
 */
class SupportTicketController extends BaseController
{
    private SupportTicketServiceInterface $_ticketService;
    private Security $_security;

    public function __construct(SupportTicketServiceInterface $ticketService, Security $security)
    {
        $this->_ticketService = $ticketService;
        $this->_security = $security;
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $userId = $this->_security->getUser()->getId();

        return $this->_ticketService->getSupportTickets($userId);
    }

    /**
     * @param int $ticketId
     * @return JsonResponse
     */
    public function show(int $ticketId): JsonResponse
    {
        return $this->_ticketService->getSupportTicketById($ticketId);
    }
}