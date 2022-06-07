<?php

namespace App\Controller;

use App\Requests\StoreTicketRequest;
use App\Requests\UpdateTicketRequest;
use App\Service\UserTicketServiceInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;

/**
 * Class UserTicketController
 * @package App\Controller
 */
class UserTicketController extends BaseController
{
    private UserTicketServiceInterface $_ticketService;
    private Security $_security;

    public function __construct(UserTicketServiceInterface $ticketService, Security $security)
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

        return $this->_ticketService->getUserTickets($userId);
    }

    /**
     * @param StoreTicketRequest $request
     * @return JsonResponse
     */
    public function store(StoreTicketRequest $request): JsonResponse
    {
        $requestBody = $this->getRequestBody($request);
        $requestBody['userId'] = $this->_security->getUser()->getId();

        return $this->_ticketService->createTicket($requestBody);
    }

    /**
     * @param int $ticketId
     * @return JsonResponse
     */
    public function show(int $ticketId): JsonResponse
    {
        return $this->_ticketService->getUserTicketById($ticketId);
    }

    /**
     * @param UpdateTicketRequest $request
     * @param int $ticketId
     * @return JsonResponse
     */
    public function update(UpdateTicketRequest $request, int $ticketId): JsonResponse
    {
        $requestBody = $this->getRequestBody($request);
        $requestBody['userId'] = $this->_security->getUser()->getId();

        return $this->_ticketService->updateUserTicket($requestBody, $ticketId);
    }

    /**
     * @param int $ticketId
     * @return JsonResponse
     */
    public function destroy(int $ticketId): JsonResponse
    {
        $userId = $this->_security->getUser()->getId();

        return $this->_ticketService->deleteUserTicket($userId, $ticketId);
    }


}