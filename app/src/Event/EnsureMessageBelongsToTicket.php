<?php

namespace App\Event;

use App\Repository\MessageRepositoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class EnsureMessageBelongsToTicket implements EventSubscriberInterface
{
    private MessageRepositoryInterface $_messageRepository;

    public function __construct(MessageRepositoryInterface $messageRepository)
    {
        $this->_messageRepository = $messageRepository;
    }

    public static function getSubscribedEvents()
    {
        return [
            \Symfony\Component\HttpKernel\KernelEvents::REQUEST => ['onKernelRequest', -10],
        ];
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $handleRoutes = [
            'message-show',
            'message-update',
            'message-destroy',
        ];

        $request = $event->getRequest();
        $routeName = $request->attributes->get('_route');

        if (in_array($routeName, $handleRoutes)) {
            $ticketId = $request->get('ticketId');
            $messageId = $request->get('messageId');

            $message = $this->_messageRepository->findOneBy([
                'id' => $messageId,
                'ticket_id' => $ticketId,
            ]);

            if (!$message) {
                $event->setResponse(new JsonResponse(['message' => 'Message not found'], 404));
            }
        }
    }
}