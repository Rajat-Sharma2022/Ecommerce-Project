<?php

/**
 * Fields Summary:
 * - brand [select]
 * - TouchScreen [booleanSelect]
 * - weight [numeric]
 * - Warranty [numeric]
 * - Generation [numeric]
 * - Os [input]
 * - Processor [input]
 * - displaySize [numeric]
 * - RAM [numeric]
 * - hardDisk [numeric]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class CategoryLaptop extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "categoryLaptop";
protected $brand;
protected $TouchScreen;
protected $weight;
protected $Warranty;
protected $Generation;
protected $Os;
protected $Processor;
protected $displaySize;
protected $RAM;
protected $hardDisk;


/**
* CategoryLaptop constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryLaptop
*/
public function setBrand (?string $brand)
{
	$this->brand = $brand;

	return $this;
}

/**
* Get TouchScreen - Touch Screen
* @return bool|null
*/
public function getTouchScreen(): ?bool
{
	$data = $this->TouchScreen;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("TouchScreen")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("TouchScreen");
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
* Set TouchScreen - Touch Screen
* @param bool|null $TouchScreen
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryLaptop
*/
public function setTouchScreen (?bool $TouchScreen)
{
	$this->TouchScreen = $TouchScreen;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryLaptop
*/
public function setWeight (?float $weight)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("weight");
	$this->weight = $fd->preSetData($this, $weight);
	return $this;
}

/**
* Get Warranty - Warranty
* @return float|null
*/
public function getWarranty(): ?float
{
	$data = $this->Warranty;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Warranty")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Warranty");
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
* Set Warranty - Warranty
* @param float|null $Warranty
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryLaptop
*/
public function setWarranty (?float $Warranty)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("Warranty");
	$this->Warranty = $fd->preSetData($this, $Warranty);
	return $this;
}

/**
* Get Generation - Generation
* @return float|null
*/
public function getGeneration(): ?float
{
	$data = $this->Generation;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Generation")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Generation");
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
* Set Generation - Generation
* @param float|null $Generation
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryLaptop
*/
public function setGeneration (?float $Generation)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("Generation");
	$this->Generation = $fd->preSetData($this, $Generation);
	return $this;
}

/**
* Get Os - Os
* @return string|null
*/
public function getOs(): ?string
{
	$data = $this->Os;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Os")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Os");
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
* Set Os - Os
* @param string|null $Os
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryLaptop
*/
public function setOs (?string $Os)
{
	$this->Os = $Os;

	return $this;
}

/**
* Get Processor - Processor
* @return string|null
*/
public function getProcessor(): ?string
{
	$data = $this->Processor;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Processor")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Processor");
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
* Set Processor - Processor
* @param string|null $Processor
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryLaptop
*/
public function setProcessor (?string $Processor)
{
	$this->Processor = $Processor;

	return $this;
}

/**
* Get displaySize - Display Size
* @return float|null
*/
public function getDisplaySize(): ?float
{
	$data = $this->displaySize;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("displaySize")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("displaySize");
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
* Set displaySize - Display Size
* @param float|null $displaySize
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryLaptop
*/
public function setDisplaySize (?float $displaySize)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("displaySize");
	$this->displaySize = $fd->preSetData($this, $displaySize);
	return $this;
}

/**
* Get RAM - R A M
* @return float|null
*/
public function getRAM(): ?float
{
	$data = $this->RAM;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("RAM")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("RAM");
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
* Set RAM - R A M
* @param float|null $RAM
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryLaptop
*/
public function setRAM (?float $RAM)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("RAM");
	$this->RAM = $fd->preSetData($this, $RAM);
	return $this;
}

/**
* Get hardDisk - Hard Disk
* @return float|null
*/
public function getHardDisk(): ?float
{
	$data = $this->hardDisk;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("hardDisk")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("hardDisk");
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
* Set hardDisk - Hard Disk
* @param float|null $hardDisk
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryLaptop
*/
public function setHardDisk (?float $hardDisk)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("hardDisk");
	$this->hardDisk = $fd->preSetData($this, $hardDisk);
	return $this;
}

}

