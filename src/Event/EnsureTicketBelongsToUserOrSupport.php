<?php

namespace App\Event;

use App\Repository\TicketRepositoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Security\Core\Security;

class EnsureTicketBelongsToUserOrSupport implements EventSubscriberInterface
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
            'message-index',
            'message-store',
            'message-show',
            'message-update',
            'message-destroy',
        ];

        $request = $event->getRequest();
        $routeName = $request->attributes->get('_route');

        if (in_array($routeName, $handleRoutes)) {
            $ticketId = $request->get('ticketId');
            $userId = $this->_security->getUser()->getId();

            $ticketAsUser = $this->_ticketRepository->findOneBy([
                'id' => $ticketId,
                'user_id' => $userId,
            ]);

            $ticketAsSupport = $this->_ticketRepository->findOneBy([
                'id' => $ticketId,
                'support_id' => $userId,
            ]);

            if (!$ticketAsUser && !$ticketAsSupport) {
                $event->setResponse(new JsonResponse(['message' => 'Ticket not found'], 404));
            }
        }
    }
}