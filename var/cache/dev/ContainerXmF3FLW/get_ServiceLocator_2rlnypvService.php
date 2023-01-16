<?php

namespace ContainerXmF3FLW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2rlnypvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2rlnypv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2rlnypv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'csrfProtection' => ['services', 'Pimcore\\Bundle\\AdminBundle\\Security\\CsrfProtectionHandler', 'getCsrfProtectionHandlerService', false],
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'gridHelperService' => ['privates', 'Pimcore\\Bundle\\AdminBundle\\Helper\\GridHelperService', 'getGridHelperServiceService', true],
        ], [
            'csrfProtection' => 'Pimcore\\Bundle\\AdminBundle\\Security\\CsrfProtectionHandler',
            'eventDispatcher' => '?',
            'gridHelperService' => 'Pimcore\\Bundle\\AdminBundle\\Helper\\GridHelperService',
        ]);
    }
}
