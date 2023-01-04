<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - Men [classificationstore]
 * - Women [classificationstore]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Clothing\Listing getList(array $config = [])
*/

class Clothing extends Concrete
{
protected $o_classId = "1";
protected $o_className = "Clothing";
protected $Men;
protected $Women;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Clothing
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get Men - Men
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getMen(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Men");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Men")->preGetData($this);

	return $data;
}

/**
* Set Men - Men
* @param \Pimcore\Model\DataObject\Classificationstore|null $Men
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setMen(?\Pimcore\Model\DataObject\Classificationstore $Men)
{
	$this->Men = $Men;

	return $this;
}

/**
* Get Women - Women
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getWomen(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Women");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Women")->preGetData($this);

	return $data;
}

/**
* Set Women - Women
* @param \Pimcore\Model\DataObject\Classificationstore|null $Women
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setWomen(?\Pimcore\Model\DataObject\Classificationstore $Women)
{
	$this->Women = $Women;

	return $this;
}

}

