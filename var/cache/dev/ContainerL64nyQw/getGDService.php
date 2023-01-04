<?php

namespace ContainerL64nyQw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Image\Adapter\GD' autowired service.
     *
     * @return \Pimcore\Image\Adapter\GD
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Image/Adapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Image/Adapter/GD.php';

        $container->factories['Pimcore\\Image\\Adapter\\GD'] = function () use ($container) {
            return new \Pimcore\Image\Adapter\GD();
        };

        return $container->factories['Pimcore\\Image\\Adapter\\GD']();
    }
}
