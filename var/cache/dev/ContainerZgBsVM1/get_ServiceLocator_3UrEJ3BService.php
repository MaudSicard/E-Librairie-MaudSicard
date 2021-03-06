<?php

namespace ContainerZgBsVM1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3UrEJ3BService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3UrEJ3B' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3UrEJ3B'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'bookRepository' => ['privates', 'App\\Repository\\BookRepository', 'getBookRepositoryService', true],
            'session' => ['services', 'session', 'getSessionService', true],
        ], [
            'bookRepository' => 'App\\Repository\\BookRepository',
            'session' => '?',
        ]);
    }
}
