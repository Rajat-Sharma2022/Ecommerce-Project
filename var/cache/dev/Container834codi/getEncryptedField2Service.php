<?php

namespace Container834codi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEncryptedField2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\DataObject\FielddefinitionMarshaller\Classificationstore\EncryptedField' shared autowired service.
     *
     * @return \Pimcore\DataObject\ClassificationstoreDataMarshaller\EncryptedField
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/ClassificationstoreDataMarshaller/EncryptedField.php';

        return $container->services['Pimcore\\DataObject\\FielddefinitionMarshaller\\Classificationstore\\EncryptedField'] = new \Pimcore\DataObject\ClassificationstoreDataMarshaller\EncryptedField(($container->services['Pimcore\\Element\\MarshallerService'] ?? $container->load('getMarshallerServiceService')));
    }
}
