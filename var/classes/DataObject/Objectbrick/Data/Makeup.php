<?php

/**
 * Fields Summary:
 * - price [slider]
 * - options [multiselect]
 * - size [slider]
 * - brand [multiselect]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Makeup extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Makeup";
protected $price;
protected $options;
protected $size;
protected $brand;


/**
* Makeup constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get price - Price
* @return float|null
*/
public function getPrice(): ?float
{
	$data = $this->price;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("price")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("price");
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
* Set price - Price
* @param float|null $price
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup
*/
public function setPrice (?float $price)
{
	$this->price = $price;

	return $this;
}

/**
* Get options - Options
* @return string[]|null
*/
public function getOptions(): ?array
{
	$data = $this->options;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("options")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("options");
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
* Set options - Options
* @param string[]|null $options
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup
*/
public function setOptions (?array $options)
{
	$this->options = $options;

	return $this;
}

/**
* Get size - Size
* @return float|null
*/
public function getSize(): ?float
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
* @param float|null $size
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup
*/
public function setSize (?float $size)
{
	$this->size = $size;

	return $this;
}

/**
* Get brand - Brand
* @return string[]|null
*/
public function getBrand(): ?array
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
* @param string[]|null $brand
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup
*/
public function setBrand (?array $brand)
{
	$this->brand = $brand;

	return $this;
}

}

