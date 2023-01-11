<?php

namespace ContainerPVntJdd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImporterServiceInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Translation\ImporterService\ImporterServiceInterface' shared autowired service.
     *
     * @return \Pimcore\Translation\ImporterService\ImporterService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Translation/ImporterService/ImporterServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Translation/ImporterService/ImporterService.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Translation/ImporterService/Importer/ImporterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Translation/ImporterService/Importer/AbstractElementImporter.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Translation/ImporterService/Importer/DataObjectImporter.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Translation/ImporterService/Importer/DocumentImporter.php';

        $container->privates['Pimcore\\Translation\\ImporterService\\ImporterServiceInterface'] = $instance = new \Pimcore\Translation\ImporterService\ImporterService();

        $instance->registerImporter('object', new \Pimcore\Translation\ImporterService\Importer\DataObjectImporter());
        $instance->registerImporter('document', new \Pimcore\Translation\ImporterService\Importer\DocumentImporter());

        return $instance;
    }
}
