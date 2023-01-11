<?php

/**
 * Fields Summary:
 * - options [select]
 * - brand [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Makeup extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "makeup";
protected $options;
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
* Get options - Options
* @return string|null
*/
public function getOptions(): ?string
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
* @param string|null $options
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup
*/
public function setOptions (?string $options)
{
	$this->options = $options;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup
*/
public function setBrand (?string $brand)
{
	$this->brand = $brand;

	return $this;
}

}

