<?php

namespace Pimcore\Model\DataObject\Feedback;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Feedback|false current()
 * @method DataObject\Feedback[] load()
 * @method DataObject\Feedback[] getData()
 * @method DataObject\Feedback[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "8";
protected $className = "feedback";


/**
* Filter by name (Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByName ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("name")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by email (Email)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByEmail ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("email")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by likes (Likes)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByLikes ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("likes")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by others (Others)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByOthers ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("others")->addListingFilter($this, $data, $operator);
	return $this;
}



}
