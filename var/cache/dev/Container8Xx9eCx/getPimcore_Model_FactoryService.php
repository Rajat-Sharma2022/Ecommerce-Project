<?php

namespace Container8Xx9eCx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Model_FactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pimcore.model.factory' shared autowired service.
     *
     * @return \Pimcore\Model\Factory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Model/FactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Model/Factory.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Model/Factory/FallbackBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Loader/ImplementationLoader/ClassMapLoader.php';

        $container->services['pimcore.model.factory'] = $instance = new \Pimcore\Model\Factory();

        $instance->addLoader(new \Pimcore\Model\Factory\FallbackBuilder());
        $instance->addLoader(new \Pimcore\Loader\ImplementationLoader\ClassMapLoader([]));

        return $instance;
    }
}
