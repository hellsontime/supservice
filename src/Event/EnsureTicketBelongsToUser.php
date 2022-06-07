<?php

namespace App\Event;

use App\Repository\TicketRepositoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Security\Core\Security;

class EnsureTicketBelongsToUser implements EventSubscriberInterface
{
    private Security $_security;
    private TicketRepositoryInterface $_ticketRepository;

    public function __construct(Security $security, TicketRepositoryInterface $ticketRepository)
    {
        $this->_security = $security;
        $this->_ticketRepository = $ticketRepository;
    }

    public static function getSubscribedEvents()
    {
        return [
            \Symfony\Component\HttpKernel\KernelEvents::REQUEST => ['onKernelRequest', -5],
        ];
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $handleRoutes = [
            'user-ticket-show',
            'user-ticket-update',
            'user-ticket-destroy',
        ];

        $request = $event->getRequest();
        $routeName = $request->attributes->get('_route');

        if (in_array($routeName, $handleRoutes)) {
            $ticketId = $request->get('ticketId');
            $userId = $this->_security->getUser()->getId();

            $ticket = $this->_ticketRepository->findOneBy([
                'id' => $ticketId,
                'user_id' => $userId,
            ]);

            if (!$ticket) {
                $event->setResponse(new JsonResponse(['message' => 'Ticket not found'], 404));
            }
        }
    }
}