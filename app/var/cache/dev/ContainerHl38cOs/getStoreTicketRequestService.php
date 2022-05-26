<?php

namespace ContainerHl38cOs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStoreTicketRequestService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Requests\StoreTicketRequest' shared autowired service.
     *
     * @return \App\Requests\StoreTicketRequest
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Requests'.\DIRECTORY_SEPARATOR.'BaseRequest.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Requests'.\DIRECTORY_SEPARATOR.'StoreTicketRequest.php';

        return $container->privates['App\\Requests\\StoreTicketRequest'] = new \App\Requests\StoreTicketRequest(($container->services['.container.private.validator'] ?? $container->load('get_Container_Private_ValidatorService')));
    }
}
