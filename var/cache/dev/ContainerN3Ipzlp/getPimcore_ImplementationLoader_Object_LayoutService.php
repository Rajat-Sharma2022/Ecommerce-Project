<?php

namespace ContainerN3Ipzlp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_ImplementationLoader_Object_LayoutService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pimcore.implementation_loader.object.layout' shared autowired service.
     *
     * @return \Pimcore\Model\DataObject\ClassDefinition\Loader\LayoutLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Model/DataObject/ClassDefinition/Loader/LayoutLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Model/DataObject/ClassDefinition/Loader/LayoutLoader.php';

        return $container->services['pimcore.implementation_loader.object.layout'] = new \Pimcore\Model\DataObject\ClassDefinition\Loader\LayoutLoader([0 => new \Pimcore\Loader\ImplementationLoader\PrefixLoader([0 => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Layout\\', 1 => '\\Object_Class_Layout_'])]);
    }
}
