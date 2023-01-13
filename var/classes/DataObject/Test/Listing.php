<?php

namespace Pimcore\Model\DataObject\Test;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Test|false current()
 * @method DataObject\Test[] load()
 * @method DataObject\Test[] getData()
 * @method DataObject\Test[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "9";
protected $className = "test";


/**
* Filter by first (First)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByFirst ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("first")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by content (Content)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByContent ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("content")->addListingFilter($this, $data, $operator);
	return $this;
}



}
