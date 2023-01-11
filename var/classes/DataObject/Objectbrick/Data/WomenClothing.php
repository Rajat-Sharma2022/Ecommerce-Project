<?php

/**
 * Fields Summary:
 * - price [slider]
 * - size [quantityValue]
 * - category [multiselect]
 * - brand [select]
 * - color [rgbaColor]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class WomenClothing extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "womenClothing";
protected $price;
protected $size;
protected $category;
protected $brand;
protected $color;


/**
* WomenClothing constructor.
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WomenClothing
*/
public function setPrice (?float $price)
{
	$this->price = $price;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WomenClothing
*/
public function setSize (?\Pimcore\Model\DataObject\Data\QuantityValue $size)
{
	$this->size = $size;

	return $this;
}

/**
* Get category - Category
* @return string[]|null
*/
public function getCategory(): ?array
{
	$data = $this->category;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("category")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("category");
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
* Set category - Category
* @param string[]|null $category
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WomenClothing
*/
public function setCategory (?array $category)
{
	$this->category = $category;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WomenClothing
*/
public function setBrand (?string $brand)
{
	$this->brand = $brand;

	return $this;
}

/**
* Get color - Color
* @return \Pimcore\Model\DataObject\Data\RgbaColor|null
*/
public function getColor(): ?\Pimcore\Model\DataObject\Data\RgbaColor
{
	$data = $this->color;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("color")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("color");
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
* Set color - Color
* @param \Pimcore\Model\DataObject\Data\RgbaColor|null $color
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WomenClothing
*/
public function setColor (?\Pimcore\Model\DataObject\Data\RgbaColor $color)
{
	$this->color = $color;

	return $this;
}

}

