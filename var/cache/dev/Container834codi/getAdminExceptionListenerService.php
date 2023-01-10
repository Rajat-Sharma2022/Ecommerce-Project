<?php

namespace Container834codi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminExceptionListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/EventListener/AdminExceptionListener.php';

        $container->privates['Pimcore\\Bundle\\AdminBundle\\EventListener\\AdminExceptionListener'] = $instance = new \Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener();

        $instance->setPimcoreContextResolver(($container->services['Pimcore\\Http\\Request\\Resolver\\PimcoreContextResolver'] ?? $container->getPimcoreContextResolverService()));

        return $instance;
    }
}
