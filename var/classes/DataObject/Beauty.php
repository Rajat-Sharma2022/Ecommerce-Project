<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - category [objectbricks]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Beauty\Listing getList(array $config = [])
*/

class Beauty extends Concrete
{
protected $o_classId = "3";
protected $o_className = "Beauty";
protected $category;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Beauty
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* @return \Pimcore\Model\DataObject\Beauty\Category
*/
public function getCategory(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->category;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Beauty\\Category")) {
			$data = new \Pimcore\Model\DataObject\Beauty\Category($this, "category");
			$this->category = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("category");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
* Set category - Category
* @param \Pimcore\Model\DataObject\Objectbrick|null $category
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setCategory(?\Pimcore\Model\DataObject\Objectbrick $category)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("category");
	$this->category = $fd->preSetData($this, $category);
	return $this;
}

}

