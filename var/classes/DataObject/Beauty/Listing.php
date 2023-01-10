<?php

namespace Pimcore\Model\DataObject\Beauty;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Beauty|false current()
 * @method DataObject\Beauty[] load()
 * @method DataObject\Beauty[] getData()
 * @method DataObject\Beauty[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "3";
protected $className = "Beauty";


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
* Filter by descriptiom (Descriptiom)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDescriptiom ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("descriptiom")->addListingFilter($this, $data, $operator);
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

/**
* Filter by startdate (startdate)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByStartdate ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("startdate")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by enddate (enddate)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByEnddate ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("enddate")->addListingFilter($this, $data, $operator);
	return $this;
}



}
