<?php

namespace ContainerR8lkgIm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Oyhn0LjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oyhn0Lj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oyhn0Lj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'book' => ['privates', '.errored..service_locator.oyhn0Lj.App\\Entity\\Book', NULL, 'Cannot autowire service ".service_locator.oyhn0Lj": it references class "App\\Entity\\Book" but no such service exists.'],
            'reviewRepository' => ['privates', 'App\\Repository\\ReviewRepository', 'getReviewRepositoryService', true],
        ], [
            'book' => 'App\\Entity\\Book',
            'reviewRepository' => 'App\\Repository\\ReviewRepository',
        ]);
    }
}