<?php

/**
 * Fields Summary:
 * - categoy [select]
 * - size [quantityValue]
 * - brand [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class MenClothing extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "menClothing";
protected $categoy;
protected $size;
protected $brand;


/**
* MenClothing constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get categoy - Categoy
* @return string|null
*/
public function getCategoy(): ?string
{
	$data = $this->categoy;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("categoy")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("categoy");
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
* Set categoy - Categoy
* @param string|null $categoy
* @return \Pimcore\Model\DataObject\Objectbrick\Data\MenClothing
*/
public function setCategoy (?string $categoy)
{
	$this->categoy = $categoy;

	return $this;
}

/**
* Get size - Size
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getSize(): ?\Pimcore\Model\DataObject\Data\QuantityValue
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
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $size
* @return \Pimcore\Model\DataObject\Objectbrick\Data\MenClothing
*/
public function setSize (?\Pimcore\Model\DataObject\Data\QuantityValue $size)
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\MenClothing
*/
public function setBrand (?string $brand)
{
	$this->brand = $brand;

	return $this;
}

}

