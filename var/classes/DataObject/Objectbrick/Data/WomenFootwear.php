<?php

/**
 * Fields Summary:
 * - size [select]
 * - style [select]
 * - brand [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class WomenFootwear extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "womenFootwear";
protected $size;
protected $style;
protected $brand;


/**
* WomenFootwear constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get size - Size
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
* Set size - Size
* @param string|null $size
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WomenFootwear
*/
public function setSize (?string $size)
{
	$this->size = $size;

	return $this;
}

/**
* Get style - Style
* @return string|null
*/
public function getStyle(): ?string
{
	$data = $this->style;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("style")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("style");
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
* Set style - Style
* @param string|null $style
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WomenFootwear
*/
public function setStyle (?string $style)
{
	$this->style = $style;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WomenFootwear
*/
public function setBrand (?string $brand)
{
	$this->brand = $brand;

	return $this;
}

}

