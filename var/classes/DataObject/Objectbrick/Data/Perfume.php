<?php

/**
 * Fields Summary:
 * - fragrance [multiselect]
 * - brand [multiselect]
 * - bundle [select]
 * - price [slider]
 * - quantity [quantityValue]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Perfume extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Perfume";
protected $fragrance;
protected $brand;
protected $bundle;
protected $price;
protected $quantity;


/**
* Perfume constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get fragrance - Fragrance
* @return string[]|null
*/
public function getFragrance(): ?array
{
	$data = $this->fragrance;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("fragrance")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("fragrance");
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
* Set fragrance - Fragrance
* @param string[]|null $fragrance
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Perfume
*/
public function setFragrance (?array $fragrance)
{
	$this->fragrance = $fragrance;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Perfume
*/
public function setBrand (?array $brand)
{
	$this->brand = $brand;

	return $this;
}

/**
* Get bundle - Pack  of
* @return string|null
*/
public function getBundle(): ?string
{
	$data = $this->bundle;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("bundle")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("bundle");
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
* Set bundle - Pack  of
* @param string|null $bundle
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Perfume
*/
public function setBundle (?string $bundle)
{
	$this->bundle = $bundle;

	return $this;
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Perfume
*/
public function setPrice (?float $price)
{
	$this->price = $price;

	return $this;
}

/**
* Get quantity - Quantity
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getQuantity(): ?\Pimcore\Model\DataObject\Data\QuantityValue
{
	$data = $this->quantity;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("quantity")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("quantity");
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
* Set quantity - Quantity
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $quantity
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Perfume
*/
public function setQuantity (?\Pimcore\Model\DataObject\Data\QuantityValue $quantity)
{
	$this->quantity = $quantity;

	return $this;
}

}

