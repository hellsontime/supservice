<?php

namespace App\Controller;

use App\Requests\UpdateTicketStatusRequest;
use App\Service\TicketStatusServiceInterface;
use Symfony\Component\Security\Core\Security;

class TicketStatusController extends BaseController
{
    private TicketStatusServiceInterface $_ticketStatusService;
    private Security $_security;

    public function __construct(TicketStatusServiceInterface $ticketStatusService, Security $security)
    {
        $this->_ticketStatusService = $ticketStatusService;
        $this->_security = $security;
    }

    public function update(UpdateTicketStatusRequest $request, int $ticketId)
    {
        $user = $this->_security->getUser();
        $status = $this->getRequestBody($request)['status'];

        return $this->_ticketStatusService->updateTicketStatus($ticketId, $user, $status);
    }
}