<?php

/**
 * Fields Summary:
<<<<<<< HEAD
 * - fragrance [select]
 * - brand [select]
 * - bundle [select]
=======
 * - fragrance [multiselect]
 * - brand [multiselect]
 * - bundle [select]
 * - price [slider]
 * - quantity [quantityValue]
>>>>>>> 562b9bf7067eb450b37191d10a3bd6e0c708cb9d
 */

return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'dao' => NULL,
   'key' => 'Perfume',
   'parentClass' => '',
   'implementsInterfaces' => '',
   'title' => '',
   'group' => 'beauty',
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'name' => NULL,
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => 0,
     'height' => 0,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'children' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => '',
         'height' => '',
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'children' => 
        array (
          0 => 
<<<<<<< HEAD
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
=======
          Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
>>>>>>> 562b9bf7067eb450b37191d10a3bd6e0c708cb9d
             'name' => 'fragrance',
             'title' => 'Fragrance',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
<<<<<<< HEAD
             'fieldtype' => 'select',
=======
             'fieldtype' => 'multiselect',
>>>>>>> 562b9bf7067eb450b37191d10a3bd6e0c708cb9d
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'options' => 
            array (
              0 => 
              array (
                'key' => 'lily',
                'value' => 'lily',
              ),
              1 => 
              array (
                'key' => 'daisy',
                'value' => 'daisy',
              ),
              2 => 
              array (
                'key' => 'jasmine',
                'value' => 'jasmine',
              ),
            ),
             'width' => '',
<<<<<<< HEAD
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'defaultValueGenerator' => '',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
=======
             'height' => '',
             'maxItems' => NULL,
             'renderType' => 'list',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'dynamicOptions' => false,
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Multiselect::__set_state(array(
>>>>>>> 562b9bf7067eb450b37191d10a3bd6e0c708cb9d
             'name' => 'brand',
             'title' => 'Brand',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
<<<<<<< HEAD
             'fieldtype' => 'select',
=======
             'fieldtype' => 'multiselect',
>>>>>>> 562b9bf7067eb450b37191d10a3bd6e0c708cb9d
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'options' => 
            array (
              0 => 
              array (
                'key' => 'fila',
                'value' => 'fila',
              ),
              1 => 
              array (
                'key' => 'titan',
                'value' => 'titan',
              ),
              2 => 
              array (
                'key' => 'denver',
                'value' => 'denver',
              ),
<<<<<<< HEAD
              3 => 
              array (
                'key' => 'axe',
                'value' => 'axe',
              ),
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'defaultValueGenerator' => '',
=======
            ),
             'width' => '',
             'height' => '',
             'maxItems' => NULL,
             'renderType' => 'list',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'dynamicOptions' => false,
>>>>>>> 562b9bf7067eb450b37191d10a3bd6e0c708cb9d
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'name' => 'bundle',
             'title' => 'Pack  of',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'select',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'options' => 
            array (
              0 => 
              array (
                'key' => 'single',
                'value' => 'single',
              ),
              1 => 
              array (
                'key' => 'pack of 2',
                'value' => 'pack of 4',
              ),
              2 => 
              array (
                'key' => 'pack of 4',
                'value' => 'pack of 4',
              ),
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'defaultValueGenerator' => '',
          )),
<<<<<<< HEAD
=======
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Slider::__set_state(array(
             'name' => 'price',
             'title' => 'Price',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'slider',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'width' => '',
             'height' => '',
             'minValue' => NULL,
             'maxValue' => NULL,
             'vertical' => false,
             'increment' => NULL,
             'decimalPrecision' => NULL,
          )),
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
             'name' => 'quantity',
             'title' => 'Quantity',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'fieldtype' => 'quantityValue',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'width' => '',
             'unitWidth' => '',
             'defaultValue' => NULL,
             'defaultUnit' => NULL,
             'validUnits' => 
            array (
            ),
             'integer' => false,
             'unsigned' => false,
             'minValue' => 10,
             'maxValue' => 400,
             'unique' => false,
             'decimalSize' => NULL,
             'decimalPrecision' => NULL,
             'autoConvert' => false,
             'defaultValueGenerator' => '',
          )),
>>>>>>> 562b9bf7067eb450b37191d10a3bd6e0c708cb9d
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'fieldtype' => 'panel',
         'layout' => NULL,
         'border' => false,
         'icon' => '',
         'labelWidth' => 0,
         'labelAlign' => 'left',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'generateTypeDeclarations' => true,
   'blockedVarsForExport' => 
  array (
  ),
   'classDefinitions' => 
  array (
    0 => 
    array (
      'classname' => 'Beauty',
      'fieldname' => 'category',
    ),
  ),
));