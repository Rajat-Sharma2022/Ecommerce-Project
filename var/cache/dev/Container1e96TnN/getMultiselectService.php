<?php

namespace Container1e96TnN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMultiselectService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\DataObject\FielddefinitionMarshaller\Classificationstore\Multiselect' shared autowired service.
     *
     * @return \Pimcore\DataObject\ClassificationstoreDataMarshaller\Multiselect
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassificationstoreDataMarshaller/Multiselect.php';

        return $container->services['Pimcore\\DataObject\\FielddefinitionMarshaller\\Classificationstore\\Multiselect'] = new \Pimcore\DataObject\ClassificationstoreDataMarshaller\Multiselect();
    }
}
