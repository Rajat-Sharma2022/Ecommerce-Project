<?php

namespace ContainerXmF3FLW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getService3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Pimcore\DataObject\GridColumnConfig\Service' shared autowired service.
     *
     * @return \Pimcore\DataObject\GridColumnConfig\Service
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/DataObject/GridColumnConfig/Service.php';

        return $container->services['Pimcore\\DataObject\\GridColumnConfig\\Service'] = new \Pimcore\DataObject\GridColumnConfig\Service(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Alias' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.alias', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_AliasService', true],
            'Anonymizer' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.anonymizer', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_AnonymizerService', true],
            'AnyGetter' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.any_getter', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_AnyGetterService', true],
            'Arithmetic' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.arithmetic', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_ArithmeticService', true],
            'AssetMetadataGetter' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.asset_metadata_getter', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_AssetMetadataGetterService', true],
            'Base64' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.base64', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_Base64Service', true],
            'Boolean' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.boolean', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_BooleanService', true],
            'BooleanFormatter' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.boolean_formatter', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_BooleanFormatterService', true],
            'CaseConverter' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.case_converter', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_CaseConverterService', true],
            'CharCounter' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.char_counter', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_CharCounterService', true],
            'Concatenator' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.concatenator', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_ConcatenatorService', true],
            'DateFormatter' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.date_formatter', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_DateFormatterService', true],
            'ElementCounter' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.element_counter', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_ElementCounterService', true],
            'FieldCollectionGetter' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.field_collection_getter', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_FieldCollectionGetterService', true],
            'GeopointRenderer' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.geopoint_renderer', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_GeopointRendererService', true],
            'HotspotimageRenderer' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.hotspotimage_renderer', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_HotspotimageRendererService', true],
            'ImageRenderer' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.image_renderer', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_ImageRendererService', true],
            'IsEqual' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.is_equal', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_IsEqualService', true],
            'Iterator' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.iterator', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_IteratorService', true],
            'JSON' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.json', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_JsonService', true],
            'LFExpander' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.lf_expander', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_LfExpanderService', true],
            'LocaleSwitcher' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.locale_switcher', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_LocaleSwitcherService', true],
            'Merge' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.merge', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_MergeService', true],
            'ObjectFieldGetter' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.object_field_getter', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_ObjectFieldGetterService', true],
            'PHP' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.php', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_PhpService', true],
            'PHPCode' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.php_code', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_PhpCodeService', true],
            'PropertyGetter' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.property_getter', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_PropertyGetterService', true],
            'RequiredBy' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.required_by', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_RequiredByService', true],
            'StringContains' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.string_contains', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_StringContainsService', true],
            'StringReplace' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.string_replace', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_StringReplaceService', true],
            'Substring' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.substring', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_SubstringService', true],
            'Text' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.text', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_TextService', true],
            'TranslateValue' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.translate_value', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_TranslateValueService', true],
            'Trimmer' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.trimmer', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_TrimmerService', true],
            'WorkflowState' => ['privates', 'pimcore.data_object.grid_column_config.operator.factory.workflowstate', 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_WorkflowstateService', true],
        ], [
            'Alias' => '?',
            'Anonymizer' => '?',
            'AnyGetter' => '?',
            'Arithmetic' => '?',
            'AssetMetadataGetter' => '?',
            'Base64' => '?',
            'Boolean' => '?',
            'BooleanFormatter' => '?',
            'CaseConverter' => '?',
            'CharCounter' => '?',
            'Concatenator' => '?',
            'DateFormatter' => '?',
            'ElementCounter' => '?',
            'FieldCollectionGetter' => '?',
            'GeopointRenderer' => '?',
            'HotspotimageRenderer' => '?',
            'ImageRenderer' => '?',
            'IsEqual' => '?',
            'Iterator' => '?',
            'JSON' => '?',
            'LFExpander' => '?',
            'LocaleSwitcher' => '?',
            'Merge' => '?',
            'ObjectFieldGetter' => '?',
            'PHP' => '?',
            'PHPCode' => '?',
            'PropertyGetter' => '?',
            'RequiredBy' => '?',
            'StringContains' => '?',
            'StringReplace' => '?',
            'Substring' => '?',
            'Text' => '?',
            'TranslateValue' => '?',
            'Trimmer' => '?',
            'WorkflowState' => '?',
        ]), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'DefaultValue' => ['privates', 'pimcore.data_object.grid_column_config.value.factory.default', 'getPimcore_DataObject_GridColumnConfig_Value_Factory_DefaultService', true],
        ], [
            'DefaultValue' => '?',
        ]));
    }
}
