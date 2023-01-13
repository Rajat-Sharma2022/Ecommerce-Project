<?php

/**
 * Fields Summary:
 * - items [select]
 * - Brand [select]
 * - size [input]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class WomensWear extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "WomensWear";
protected $items;
protected $Brand;
protected $size;


/**
* WomensWear constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get items - Items
* @return string|null
*/
public function getItems(): ?string
{
	$data = $this->items;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("items")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("items");
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
* Set items - Items
* @param string|null $items
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WomensWear
*/
public function setItems (?string $items)
{
	$this->items = $items;

	return $this;
}

/**
* Get Brand - Brand
* @return string|null
*/
public function getBrand(): ?string
{
	$data = $this->Brand;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Brand")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Brand");
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
* Set Brand - Brand
* @param string|null $Brand
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WomensWear
*/
public function setBrand (?string $Brand)
{
	$this->Brand = $Brand;

	return $this;
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WomensWear
*/
public function setSize (?string $size)
{
	$this->size = $size;

	return $this;
}

}

