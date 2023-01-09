<?php

namespace Container6vBF2Ok;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_DependencyFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.dependency_factory' shared service.
     *
     * @return \Doctrine\Migrations\DependencyFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/DependencyFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Migration/ConfigurationLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Migration/ExistingConfiguration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/ConnectionLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Configuration/Connection/ConnectionRegistryConnection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/MigrationsRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Migrations/FilteredMigrationsRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Metadata/Storage/MetadataStorage.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Migrations/FilteredTableMetadataStorage.php';

        $container->privates['doctrine.migrations.dependency_factory'] = $instance = \Doctrine\Migrations\DependencyFactory::fromConnection(new \Doctrine\Migrations\Configuration\Migration\ExistingConfiguration(($container->privates['doctrine.migrations.configuration'] ?? $container->load('getDoctrine_Migrations_ConfigurationService'))), \Doctrine\Migrations\Configuration\Connection\ConnectionRegistryConnection::withSimpleDefault(($container->services['doctrine'] ?? $container->getDoctrineService()), 'default'), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));

        $instance->setDefinition('Doctrine\\Migrations\\Version\\Comparator', function () use ($container) {
            return ($container->privates['Pimcore\\Migrations\\DirectoryAwareVersionComparator'] ?? $container->load('getDirectoryAwareVersionComparatorService'));
        });
        $instance->setDefinition('Doctrine\\Migrations\\Version\\MigrationFactory', function () use ($container) {
            return ($container->privates['doctrine.migrations.container_aware_migrations_factory'] ?? $container->load('getDoctrine_Migrations_ContainerAwareMigrationsFactoryService'));
        });
        $instance->setDefinition('Doctrine\\Migrations\\MigrationsRepository', ($container->services['Pimcore\\Migrations\\FilteredMigrationsRepository'] ?? ($container->services['Pimcore\\Migrations\\FilteredMigrationsRepository'] = new \Pimcore\Migrations\FilteredMigrationsRepository())));
        $instance->setDefinition('Doctrine\\Migrations\\Metadata\\Storage\\MetadataStorage', ($container->services['Pimcore\\Migrations\\FilteredTableMetadataStorage'] ?? ($container->services['Pimcore\\Migrations\\FilteredTableMetadataStorage'] = new \Pimcore\Migrations\FilteredTableMetadataStorage())));

        return $instance;
    }
}
