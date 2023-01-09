<?php

namespace Pimcore\Model\DataObject\ElectronicsDevices;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\ElectronicsDevices|false current()
 * @method DataObject\ElectronicsDevices[] load()
 * @method DataObject\ElectronicsDevices[] getData()
 * @method DataObject\ElectronicsDevices[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "4";
protected $className = "electronicsDevices";


/**
* Filter by sku (Sku)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterBySku ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("sku")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by price (Price)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByPrice ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("price")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by description (Description)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDescription ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("description")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by photo (Photo)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByPhoto ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("photo")->addListingFilter($this, $data, $operator);
	return $this;
}



}
