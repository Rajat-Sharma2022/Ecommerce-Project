<?php

/**
 * Fields Summary:
 * - fragrance [select]
 * - brand [select]
 * - bundle [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Perfume extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "perfume";
protected $fragrance;
protected $brand;
protected $bundle;


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
* @return string|null
*/
public function getFragrance(): ?string
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
* @param string|null $fragrance
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Perfume
*/
public function setFragrance (?string $fragrance)
{
	$this->fragrance = $fragrance;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Perfume
*/
public function setBrand (?string $brand)
{
	$this->brand = $brand;

	return $this;
}

/**
* Get bundle - Bundle
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
* Set bundle - Bundle
* @param string|null $bundle
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Perfume
*/
public function setBundle (?string $bundle)
{
	$this->bundle = $bundle;

	return $this;
}

}

