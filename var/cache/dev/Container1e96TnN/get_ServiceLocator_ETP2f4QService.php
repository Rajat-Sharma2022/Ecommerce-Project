<?php

namespace Container1e96TnN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ETP2f4QService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eTP2f4Q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eTP2f4Q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event' => ['privates', '.errored..service_locator.eTP2f4Q.Symfony\\Component\\HttpKernel\\Event\\ResponseEvent', NULL, 'Cannot autowire service ".service_locator.eTP2f4Q": it references class "Symfony\\Component\\HttpKernel\\Event\\ResponseEvent" but no such service exists.'],
        ], [
            'event' => 'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent',
        ]);
    }
}
