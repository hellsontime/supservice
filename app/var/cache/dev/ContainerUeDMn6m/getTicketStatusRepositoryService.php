<?php

namespace ContainerUeDMn6m;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTicketStatusRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\TicketStatusRepository' shared autowired service.
     *
     * @return \App\Repository\TicketStatusRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'TicketStatusRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'TicketStatusRepository.php';

        return $container->privates['App\\Repository\\TicketStatusRepository'] = new \App\Repository\TicketStatusRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
