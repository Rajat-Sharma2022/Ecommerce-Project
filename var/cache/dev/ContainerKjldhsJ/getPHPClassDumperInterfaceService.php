<?php

namespace ContainerKjldhsJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPHPClassDumperInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\DataObject\ClassBuilder\PHPClassDumperInterface' shared autowired service.
     *
     * @return \Pimcore\DataObject\ClassBuilder\PHPClassDumper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/PHPClassDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/PHPClassDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/ClassBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/ClassBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/FieldDefinitionPropertiesBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/FieldDefinitionPropertiesBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/FieldDefinitionBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/FieldDefinitionBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/ListingClassBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/ListingClassBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/ListingClassFieldDefinitionBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/ListingClassFieldDefinitionBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/FieldDefinitionDocBlockBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassBuilder/FieldDefinitionDocBlockBuilder.php';

        return $container->services['Pimcore\\DataObject\\ClassBuilder\\PHPClassDumperInterface'] = new \Pimcore\DataObject\ClassBuilder\PHPClassDumper(new \Pimcore\DataObject\ClassBuilder\ClassBuilder(($container->services['Pimcore\\DataObject\\ClassBuilder\\FieldDefinitionDocBlockBuilderInterface'] ?? ($container->services['Pimcore\\DataObject\\ClassBuilder\\FieldDefinitionDocBlockBuilderInterface'] = new \Pimcore\DataObject\ClassBuilder\FieldDefinitionDocBlockBuilder())), new \Pimcore\DataObject\ClassBuilder\FieldDefinitionPropertiesBuilder(), new \Pimcore\DataObject\ClassBuilder\FieldDefinitionBuilder()), new \Pimcore\DataObject\ClassBuilder\ListingClassBuilder(new \Pimcore\DataObject\ClassBuilder\ListingClassFieldDefinitionBuilder()));
    }
}