<?php

namespace ContainerZgBsVM1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4Iyl90qService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4Iyl90q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4Iyl90q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'messageGenerator' => ['privates', 'App\\Service\\MessageGenerator', 'getMessageGeneratorService', true],
            'review' => ['privates', '.errored..service_locator.4Iyl90q.App\\Entity\\Review', NULL, 'Cannot autowire service ".service_locator.4Iyl90q": it references class "App\\Entity\\Review" but no such service exists.'],
        ], [
            'messageGenerator' => 'App\\Service\\MessageGenerator',
            'review' => 'App\\Entity\\Review',
        ]);
    }
}
