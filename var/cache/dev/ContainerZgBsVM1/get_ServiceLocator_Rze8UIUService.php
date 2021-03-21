<?php

namespace ContainerZgBsVM1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Rze8UIUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Rze8UIU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Rze8UIU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'groupRepository' => ['privates', 'App\\Repository\\GroupRepository', 'getGroupRepositoryService', true],
        ], [
            'groupRepository' => 'App\\Repository\\GroupRepository',
        ]);
    }
}
