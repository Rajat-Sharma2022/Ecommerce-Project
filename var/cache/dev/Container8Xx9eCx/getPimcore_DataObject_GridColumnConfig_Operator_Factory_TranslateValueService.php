<?php

namespace Container8Xx9eCx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_DataObject_GridColumnConfig_Operator_Factory_TranslateValueService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore.data_object.grid_column_config.operator.factory.translate_value' shared autowired service.
     *
     * @return \Pimcore\DataObject\GridColumnConfig\Operator\Factory\TranslateValueFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/GridColumnConfig/Operator/Factory/OperatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/GridColumnConfig/Operator/Factory/TranslateValueFactory.php';

        return $container->privates['pimcore.data_object.grid_column_config.operator.factory.translate_value'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\TranslateValueFactory(($container->services['Symfony\\Contracts\\Translation\\TranslatorInterface'] ?? $container->getTranslatorInterfaceService()));
    }
}
