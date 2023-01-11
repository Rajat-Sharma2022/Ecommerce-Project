<?php

namespace ContainerCaieTnk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMyfControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MyfController' shared autowired service.
     *
     * @return \App\Controller\MyfController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/FrontendController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MyfController.php';

        $container->services['App\\Controller\\MyfController'] = $instance = new \App\Controller\MyfController();

        $instance->setContainer(($container->privates['.service_locator.Z3eEsyj'] ?? $container->load('get_ServiceLocator_Z3eEsyjService'))->withContext('App\\Controller\\MyfController', $container));

        return $instance;
    }
}