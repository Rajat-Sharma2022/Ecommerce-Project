<?php

namespace ContainerPVntJdd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_DataObject_GridColumnConfig_Operator_Factory_ElementCounterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore.data_object.grid_column_config.operator.factory.element_counter' shared autowired service.
     *
     * @return \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/GridColumnConfig/Operator/Factory/OperatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/GridColumnConfig/Operator/Factory/DefaultOperatorFactory.php';

        return $container->privates['pimcore.data_object.grid_column_config.operator.factory.element_counter'] = new \Pimcore\DataObject\GridColumnConfig\Operator\Factory\DefaultOperatorFactory('Pimcore\\DataObject\\GridColumnConfig\\Operator\\ElementCounter');
    }
}
