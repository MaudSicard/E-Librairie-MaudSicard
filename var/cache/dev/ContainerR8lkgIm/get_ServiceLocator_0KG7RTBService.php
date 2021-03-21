<?php

namespace ContainerR8lkgIm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0KG7RTBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0KG7RTB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0KG7RTB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'messageGenerator' => ['privates', 'App\\Service\\MessageGenerator', 'getMessageGeneratorService', true],
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
            'user' => ['privates', '.errored..service_locator.0KG7RTB.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.0KG7RTB": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'messageGenerator' => 'App\\Service\\MessageGenerator',
            'passwordEncoder' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
