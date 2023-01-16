<?php

namespace ContainerKjldhsJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDirectoryAwareVersionComparatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Migrations\DirectoryAwareVersionComparator' shared autowired service.
     *
     * @return \Pimcore\Migrations\DirectoryAwareVersionComparator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Version/Comparator.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Migrations/DirectoryAwareVersionComparator.php';

        return $container->privates['Pimcore\\Migrations\\DirectoryAwareVersionComparator'] = new \Pimcore\Migrations\DirectoryAwareVersionComparator(($container->privates['doctrine.migrations.configuration'] ?? $container->load('getDoctrine_Migrations_ConfigurationService')));
    }
}
