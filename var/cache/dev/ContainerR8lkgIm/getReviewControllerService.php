<?php

namespace ContainerR8lkgIm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReviewControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ReviewController' shared autowired service.
     *
     * @return \App\Controller\ReviewController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ReviewController.php';

        $container->services['App\\Controller\\ReviewController'] = $instance = new \App\Controller\ReviewController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\ReviewController', $container));

        return $instance;
    }
}
