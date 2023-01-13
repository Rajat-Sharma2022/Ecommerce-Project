<?php

namespace ContainerN3Ipzlp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImportDataExtractorInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Translation\ImportDataExtractor\ImportDataExtractorInterface' shared autowired service.
     *
     * @return \Pimcore\Translation\ImportDataExtractor\Xliff12DataExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Translation/ImportDataExtractor/ImportDataExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Translation/ImportDataExtractor/Xliff12DataExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Translation/ImportDataExtractor/TranslationItemResolver/TranslationItemResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Translation/ImportDataExtractor/TranslationItemResolver/TranslationItemResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Translation/Escaper/Xliff12Escaper.php';

        return $container->privates['Pimcore\\Translation\\ImportDataExtractor\\ImportDataExtractorInterface'] = new \Pimcore\Translation\ImportDataExtractor\Xliff12DataExtractor(($container->privates['Pimcore\\Translation\\Escaper\\Xliff12Escaper'] ?? ($container->privates['Pimcore\\Translation\\Escaper\\Xliff12Escaper'] = new \Pimcore\Translation\Escaper\Xliff12Escaper())), new \Pimcore\Translation\ImportDataExtractor\TranslationItemResolver\TranslationItemResolver());
    }
}
