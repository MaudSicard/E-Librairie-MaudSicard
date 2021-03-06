<?php

namespace ContainerR8lkgIm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VAEJOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vAE__jO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vAE__jO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'messageGenerator' => ['privates', 'App\\Service\\MessageGenerator', 'getMessageGeneratorService', true],
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
        ], [
            'messageGenerator' => 'App\\Service\\MessageGenerator',
            'passwordEncoder' => '?',
        ]);
    }
}
