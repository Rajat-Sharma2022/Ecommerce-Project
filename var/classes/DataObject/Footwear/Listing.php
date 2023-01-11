<?php

namespace Pimcore\Model\DataObject\Footwear;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Footwear|false current()
 * @method DataObject\Footwear[] load()
 * @method DataObject\Footwear[] getData()
 * @method DataObject\Footwear[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "5";
protected $className = "footwear";


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
* Filter by image (Image)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByImage ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("image")->addListingFilter($this, $data, $operator);
	return $this;
}

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



}
