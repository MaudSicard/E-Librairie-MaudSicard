<?php

namespace ContainerZgBsVM1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G9at9D9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G9at9D9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G9at9D9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'messageGenerator' => ['privates', 'App\\Service\\MessageGenerator', 'getMessageGeneratorService', true],
        ], [
            'entityManager' => '?',
            'messageGenerator' => 'App\\Service\\MessageGenerator',
        ]);
    }
}
