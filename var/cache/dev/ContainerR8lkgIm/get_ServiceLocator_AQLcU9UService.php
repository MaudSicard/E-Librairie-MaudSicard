<?php

namespace ContainerR8lkgIm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AQLcU9UService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aQLcU9U' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aQLcU9U'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'gender' => ['privates', '.errored..service_locator.aQLcU9U.App\\Entity\\Gendre', NULL, 'Cannot autowire service ".service_locator.aQLcU9U": it references class "App\\Entity\\Gendre" but no such service exists.'],
            'messageGenerator' => ['privates', 'App\\Service\\MessageGenerator', 'getMessageGeneratorService', true],
        ], [
            'gender' => 'App\\Entity\\Gendre',
            'messageGenerator' => 'App\\Service\\MessageGenerator',
        ]);
    }
}
