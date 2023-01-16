<?php

namespace ContainerXmF3FLW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Http\ClientFactory' shared autowired service.
     *
     * @return \Pimcore\Http\ClientFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Http/ClientFactory.php';

        return $container->services['Pimcore\\Http\\ClientFactory'] = new \Pimcore\Http\ClientFactory(($container->services['Pimcore\\Config'] ?? ($container->services['Pimcore\\Config'] = new \Pimcore\Config())));
    }
}
