<?php

/**
 * Fields Summary:
 * - size [select]
 * - brand [select]
 * - types [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class MenFootwear extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "menFootwear";
protected $size;
protected $brand;
protected $types;


/**
* MenFootwear constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get size - size
* @return string|null
*/
public function getSize(): ?string
{
	$data = $this->size;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("size")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("size");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set size - size
* @param string|null $size
* @return \Pimcore\Model\DataObject\Objectbrick\Data\MenFootwear
*/
public function setSize (?string $size)
{
	$this->size = $size;

	return $this;
}

/**
* Get brand - Brand
* @return string|null
*/
public function getBrand(): ?string
{
	$data = $this->brand;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("brand")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("brand");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set brand - Brand
* @param string|null $brand
* @return \Pimcore\Model\DataObject\Objectbrick\Data\MenFootwear
*/
public function setBrand (?string $brand)
{
	$this->brand = $brand;

	return $this;
}

/**
* Get types - Types
* @return string|null
*/
public function getTypes(): ?string
{
	$data = $this->types;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("types")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("types");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set types - Types
* @param string|null $types
* @return \Pimcore\Model\DataObject\Objectbrick\Data\MenFootwear
*/
public function setTypes (?string $types)
{
	$this->types = $types;

	return $this;
}

}

