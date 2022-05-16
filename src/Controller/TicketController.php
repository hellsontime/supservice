<?php

namespace App\Controller;

use App\Entity\Ticket;
use App\Service\TicketServiceInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TicketController
 * @package App\Controller
 * @Route("/api")
 */
class TicketController extends BaseController
{
    private TicketServiceInterface $_ticketService;

    public function __construct(TicketServiceInterface $ticketService)
    {
        $this->_ticketService = $ticketService;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route("/tickets", name="tickets-get", methods={"GET"})
     */
    public function index(Request $request): JsonResponse
    {
        $request = $this->transformJsonBody($request);

        $userId = 1; //TODO: add authentication and figure out how to get user id from request

        return $this->_ticketService->getUserTickets($userId);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route("/tickets", name="tickets-post", methods={"POST"})
     */
    public function store(Request $request): JsonResponse
    {
        $requestBody = $this->getRequestBody($request);

        return $this->_ticketService->createTicket($requestBody);
    }

    /**
     * @param Request $request
     * @param int $ticketId
     * @return JsonResponse
     * @Route("/tickets/{ticketId}", name="ticket-get", methods={"GET"})
     */
    public function show(Request $request, int $ticketId): JsonResponse
    {
//        $requestBody = $this->getRequestBody($request);

        $userId = 1; //TODO: add authentication and figure out how to get user id from request

        return $this->_ticketService->getUserTicketById($userId, $ticketId);
    }
}