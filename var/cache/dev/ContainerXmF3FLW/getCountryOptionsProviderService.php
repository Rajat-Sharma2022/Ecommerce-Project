<?php

namespace ContainerXmF3FLW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCountryOptionsProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\Model\DataObject\ClassDefinition\DynamicOptionsProvider\CountryOptionsProvider' shared autowired service.
     *
     * @return \Pimcore\Model\DataObject\ClassDefinition\DynamicOptionsProvider\CountryOptionsProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/DataObject/ClassDefinition/DynamicOptionsProvider/MultiSelectOptionsProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/DataObject/ClassDefinition/DynamicOptionsProvider/SelectOptionsProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/DataObject/ClassDefinition/DynamicOptionsProvider/CountryOptionsProvider.php';

        return $container->services['Pimcore\\Model\\DataObject\\ClassDefinition\\DynamicOptionsProvider\\CountryOptionsProvider'] = new \Pimcore\Model\DataObject\ClassDefinition\DynamicOptionsProvider\CountryOptionsProvider(($container->services['Pimcore\\Localization\\LocaleServiceInterface'] ?? $container->getLocaleServiceInterfaceService()));
    }
}
