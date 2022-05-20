<?php

namespace App\Controller;

use App\Requests\StoreTicketRequest;
use App\Requests\UpdateTicketRequest;
use App\Service\TicketServiceInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * Class TicketController
 * @package App\Controller
 * @Route("/api")
 */
class TicketController extends BaseController
{
    private TicketServiceInterface $_ticketService;
    private Security $_security;

    public function __construct(TicketServiceInterface $ticketService, Security $security)
    {
        $this->_ticketService = $ticketService;
        $this->_security = $security;
    }

    /**
     * @return JsonResponse
     * @Route("/tickets", name="tickets-get", methods={"GET"})
     */
    public function index(): JsonResponse
    {
        $userId = $this->_security->getUser()->getId();

        return $this->_ticketService->getUserTickets($userId);
    }

    /**
     * @param StoreTicketRequest $request
     * @return JsonResponse
     * @Route("/tickets", name="tickets-post", methods={"POST"})
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
     * @Route("/tickets/{ticketId}", name="ticket-get", methods={"GET"})
     */
    public function show(int $ticketId): JsonResponse
    {
        $userId = $this->_security->getUser()->getId();

        return $this->_ticketService->getUserTicketById($userId, $ticketId);
    }

    /**
     * @param UpdateTicketRequest $request
     * @param int $ticketId
     * @return JsonResponse
     * @Route("/tickets/{ticketId}", name="ticket-put", methods={"PUT"})
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
     * @Route("/tickets/{ticketId}", name="ticket-delete", methods={"DELETE"})
     */
    public function destroy(int $ticketId): JsonResponse
    {
        $userId = $this->_security->getUser()->getId();

        return $this->_ticketService->deleteUserTicket($userId, $ticketId);
    }


}