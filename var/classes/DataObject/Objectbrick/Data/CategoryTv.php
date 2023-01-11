<?php

/**
 * Fields Summary:
 * - screenSize [numeric]
 * - weight [numeric]
 * - isSmart [booleanSelect]
 * - os [input]
 * - packedOn [date]
 * - noOfWarrantyMonths [numeric]
 * - Brand [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class CategoryTv extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "categoryTv";
protected $screenSize;
protected $weight;
protected $isSmart;
protected $os;
protected $packedOn;
protected $noOfWarrantyMonths;
protected $Brand;


/**
* CategoryTv constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get screenSize - Screen Size
* @return float|null
*/
public function getScreenSize(): ?float
{
	$data = $this->screenSize;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("screenSize")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("screenSize");
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
* Set screenSize - Screen Size
* @param float|null $screenSize
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryTv
*/
public function setScreenSize (?float $screenSize)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("screenSize");
	$this->screenSize = $fd->preSetData($this, $screenSize);
	return $this;
}

/**
* Get weight - Weight
* @return float|null
*/
public function getWeight(): ?float
{
	$data = $this->weight;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("weight")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("weight");
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
* Set weight - Weight
* @param float|null $weight
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryTv
*/
public function setWeight (?float $weight)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("weight");
	$this->weight = $fd->preSetData($this, $weight);
	return $this;
}

/**
* Get isSmart - Is Smart
* @return bool|null
*/
public function getIsSmart(): ?bool
{
	$data = $this->isSmart;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("isSmart")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("isSmart");
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
* Set isSmart - Is Smart
* @param bool|null $isSmart
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryTv
*/
public function setIsSmart (?bool $isSmart)
{
	$this->isSmart = $isSmart;

	return $this;
}

/**
* Get os - Os
* @return string|null
*/
public function getOs(): ?string
{
	$data = $this->os;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("os")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("os");
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
* Set os - Os
* @param string|null $os
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryTv
*/
public function setOs (?string $os)
{
	$this->os = $os;

	return $this;
}

/**
* Get packedOn - packedOn
* @return \Carbon\Carbon|null
*/
public function getPackedOn(): ?\Carbon\Carbon
{
	$data = $this->packedOn;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("packedOn")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("packedOn");
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
* Set packedOn - packedOn
* @param \Carbon\Carbon|null $packedOn
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryTv
*/
public function setPackedOn (?\Carbon\Carbon $packedOn)
{
	$this->packedOn = $packedOn;

	return $this;
}

/**
* Get noOfWarrantyMonths - No Of Warranty Months
* @return float|null
*/
public function getNoOfWarrantyMonths(): ?float
{
	$data = $this->noOfWarrantyMonths;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("noOfWarrantyMonths")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("noOfWarrantyMonths");
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
* Set noOfWarrantyMonths - No Of Warranty Months
* @param float|null $noOfWarrantyMonths
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryTv
*/
public function setNoOfWarrantyMonths (?float $noOfWarrantyMonths)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("noOfWarrantyMonths");
	$this->noOfWarrantyMonths = $fd->preSetData($this, $noOfWarrantyMonths);
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryTv
*/
public function setBrand (?string $Brand)
{
	$this->Brand = $Brand;

	return $this;
}

}

