<?php

/**
 * Fields Summary:
 * - Size [select]
 * - Brand [select]
 * - items [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class MensWear extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "MensWear";
protected $Size;
protected $Brand;
protected $items;


/**
* MensWear constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get Size - Size
* @return string|null
*/
public function getSize(): ?string
{
	$data = $this->Size;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Size")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Size");
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
* Set Size - Size
* @param string|null $Size
* @return \Pimcore\Model\DataObject\Objectbrick\Data\MensWear
*/
public function setSize (?string $Size)
{
	$this->Size = $Size;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\MensWear
*/
public function setBrand (?string $Brand)
{
	$this->Brand = $Brand;

	return $this;
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\MensWear
*/
public function setItems (?string $items)
{
	$this->items = $items;

	return $this;
}

}

