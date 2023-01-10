<?php

namespace Container1e96TnN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_ImplementationLoader_Object_DataService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'pimcore.implementation_loader.object.data' shared autowired service.
     *
     * @return \Pimcore\Model\DataObject\ClassDefinition\Loader\DataLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Model/DataObject/ClassDefinition/Loader/DataLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Model/DataObject/ClassDefinition/Loader/DataLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Loader/ImplementationLoader/ClassMapLoader.php';

        return $container->services['pimcore.implementation_loader.object.data'] = new \Pimcore\Model\DataObject\ClassDefinition\Loader\DataLoader([0 => new \Pimcore\Loader\ImplementationLoader\PrefixLoader([0 => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\', 1 => '\\Object_Class_Data_']), 1 => new \Pimcore\Loader\ImplementationLoader\ClassMapLoader(['block' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Block', 'calculatedValue' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\CalculatedValue', 'checkbox' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Checkbox', 'classificationstore' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Classificationstore', 'consent' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Consent', 'country' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Country', 'countrymultiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Countrymultiselect', 'date' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Date', 'datetime' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Datetime', 'email' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Email', 'encryptedField' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\EncryptedField', 'externalImage' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\ExternalImage', 'fieldcollections' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Fieldcollections', 'firstname' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Firstname', 'gender' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Gender', 'geobounds' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Geobounds', 'geopoint' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Geopoint', 'geopolygon' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Geopolygon', 'geopolyline' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Geopolyline', 'hotspotimage' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Hotspotimage', 'manyToOneRelation' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\ManyToOneRelation', 'image' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Image', 'imageGallery' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\ImageGallery', 'input' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Input', 'language' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Language', 'languagemultiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Languagemultiselect', 'lastname' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Lastname', 'link' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Link', 'localizedfields' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Localizedfields', 'manyToManyRelation' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\ManyToManyRelation', 'advancedManyToManyRelation' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\AdvancedManyToManyRelation', 'multiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Multiselect', 'newsletterActive' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\NewsletterActive', 'reverseObjectRelation' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\ReverseObjectRelation', 'urlSlug' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\UrlSlug', 'numeric' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Numeric', 'objectbricks' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Objectbricks', 'manyToManyObjectRelation' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\ManyToManyObjectRelation', 'advancedManyToManyObjectRelation' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\AdvancedManyToManyObjectRelation', 'password' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Password', 'rgbaColor' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\RgbaColor', 'targetGroup' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\TargetGroup', 'targetGroupMultiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\TargetGroupMultiselect', 'quantityValue' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\QuantityValue', 'inputQuantityValue' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\InputQuantityValue', 'select' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Select', 'slider' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Slider', 'structuredTable' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\StructuredTable', 'table' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Table', 'textarea' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Textarea', 'time' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Time', 'user' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\User', 'video' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Video', 'wysiwyg' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Wysiwyg'])]);
    }
}
