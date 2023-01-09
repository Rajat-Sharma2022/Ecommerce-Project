<?php

namespace ContainerIz9Nwpv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetsInstallerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Tool\AssetsInstaller' shared autowired service.
     *
     * @return \Pimcore\Tool\AssetsInstaller
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Tool/AssetsInstaller.php';

        return $container->services['Pimcore\\Tool\\AssetsInstaller'] = new \Pimcore\Tool\AssetsInstaller();
    }
}
