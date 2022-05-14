<?php

namespace App\Controller;

use App\Service\TicketServiceInterface;
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
//    private $_tokenStorage;

    public function __construct(TicketServiceInterface $ticketService)
    {
        $this->_ticketService = $ticketService;
//        $this->_tokenStorage = $tokenStorage;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route("/tickets", name="tickets", methods={"GET"})
     */
    public function getUserTickets(Request $request): JsonResponse
    {
        $request = $this->transformJsonBody($request);

        $userId = 1; //TODO: figure out how to get user id from request

        return $this->_ticketService->getUserTickets($userId);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Route("/tickets", name="tickets", methods={"POST"})
     */
    public function createTicket(Request $request): JsonResponse
    {
        $requestBody = $this->getRequestBody($request);

        dd($requestBody['userdata']);
    }
}