<?php

namespace App\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Security\Core\Security;

class EnsureUserIsDefaultUser implements EventSubscriberInterface
{
    private Security $_security;

    public function __construct(Security $security)
    {
        $this->_security = $security;
    }

    public static function getSubscribedEvents()
    {
        return [
            \Symfony\Component\HttpKernel\KernelEvents::REQUEST => ['onKernelRequest', 0],
        ];
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $handleRoutes = [
            'user-ticket-index',
            'user-ticket-store',
            'user-ticket-show',
            'user-ticket-update',
            'user-ticket-destroy',
        ];

        $request = $event->getRequest();
        $routeName = $request->attributes->get('_route');

        if (in_array($routeName, $handleRoutes)) {
            $userRoles = $this->_security->getUser()->getRoles();

            if (in_array('ROLE_SUPPORT', $userRoles)) {
                $event->setResponse(new JsonResponse([
                    'message' => 'You don\'t have permissions to access this route'
                ], 403));
            }
        }
    }
}