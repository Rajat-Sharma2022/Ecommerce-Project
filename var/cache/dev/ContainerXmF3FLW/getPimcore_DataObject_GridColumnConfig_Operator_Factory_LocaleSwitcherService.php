<?php

namespace ContainerXmF3FLW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_DataObject_GridColumnConfig_Operator_Factory_LocaleSwitcherService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore.data_object.grid_column_config.operator.factory.locale_switcher' shared autowired service.
     *
     * @return \Pimcore\DataObject\GridColumnConfig\Operator\Factory\LocaleSwitcherFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/GridColumnConfig/Operator/Factory/OperatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/GridColumnConfig/Operator/Factory/LocaleSwitcherFactory.php';

        return $container->privates['pimcore.data_object.grid_column_config.operator.factory.locale_switcher'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\LocaleSwitcherFactory(($container->services['Pimcore\\Localization\\LocaleServiceInterface'] ?? $container->getLocaleServiceInterfaceService()));
    }
}
