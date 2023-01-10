<?php

namespace Container1e96TnN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIndexControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Bundle\AdminBundle\Controller\Admin\IndexController' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Controller\Admin\IndexController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/Controller.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/DoubleAuthenticationControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/AdminControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/AdminController.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Controller/KernelResponseEventInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Controller/Admin/IndexController.php';

        $container->services['Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\IndexController'] = $instance = new \Pimcore\Bundle\AdminBundle\Controller\Admin\IndexController(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        $instance->setContainer(($container->privates['.service_locator.oafe0zm'] ?? $container->load('get_ServiceLocator_Oafe0zmService'))->withContext('Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\IndexController', $container));

        return $instance;
    }
}