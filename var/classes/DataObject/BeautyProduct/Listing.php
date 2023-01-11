<?php

namespace Pimcore\Model\DataObject\BeautyProduct;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\BeautyProduct|false current()
 * @method DataObject\BeautyProduct[] load()
 * @method DataObject\BeautyProduct[] getData()
 * @method DataObject\BeautyProduct[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "7";
protected $className = "beautyProduct";


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
* Filter by Mfd (Mfd)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByMfd ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Mfd")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by expiry (Expiry)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByExpiry ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("expiry")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by select (Select)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterBySelect ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("select")->addListingFilter($this, $data, $operator);
	return $this;
}



}
