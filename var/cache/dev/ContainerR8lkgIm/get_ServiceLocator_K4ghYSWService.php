<?php

namespace ContainerR8lkgIm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K4ghYSWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.k4ghYSW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.k4ghYSW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'groupRepository' => ['privates', 'App\\Repository\\GroupRepository', 'getGroupRepositoryService', true],
        ], [
            'groupRepository' => 'App\\Repository\\GroupRepository',
        ]);
    }
}
