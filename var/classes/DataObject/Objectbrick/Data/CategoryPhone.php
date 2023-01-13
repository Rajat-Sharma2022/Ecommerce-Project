<?php

/**
 * Fields Summary:
 * - brand [select]
 * - releaseDate [date]
 * - Ram [numeric]
 * - Storage [numeric]
 * - Os [input]
 * - CameraQuality [numeric]
 * - ScreenSize [numeric]
 * - Processor [input]
 * - weight [numeric]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class CategoryPhone extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "categoryPhone";
protected $brand;
protected $releaseDate;
protected $Ram;
protected $Storage;
protected $Os;
protected $CameraQuality;
protected $ScreenSize;
protected $Processor;
protected $weight;


/**
* CategoryPhone constructor.
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryPhone
*/
public function setBrand (?string $brand)
{
	$this->brand = $brand;

	return $this;
}

/**
* Get releaseDate - Release Date
* @return \Carbon\Carbon|null
*/
public function getReleaseDate(): ?\Carbon\Carbon
{
	$data = $this->releaseDate;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("releaseDate")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("releaseDate");
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
* Set releaseDate - Release Date
* @param \Carbon\Carbon|null $releaseDate
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryPhone
*/
public function setReleaseDate (?\Carbon\Carbon $releaseDate)
{
	$this->releaseDate = $releaseDate;

	return $this;
}

/**
* Get Ram - Ram
* @return float|null
*/
public function getRam(): ?float
{
	$data = $this->Ram;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Ram")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Ram");
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
* Set Ram - Ram
* @param float|null $Ram
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryPhone
*/
public function setRam (?float $Ram)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("Ram");
	$this->Ram = $fd->preSetData($this, $Ram);
	return $this;
}

/**
* Get Storage - Storage
* @return float|null
*/
public function getStorage(): ?float
{
	$data = $this->Storage;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Storage")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Storage");
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
* Set Storage - Storage
* @param float|null $Storage
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryPhone
*/
public function setStorage (?float $Storage)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("Storage");
	$this->Storage = $fd->preSetData($this, $Storage);
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryPhone
*/
public function setOs (?string $Os)
{
	$this->Os = $Os;

	return $this;
}

/**
* Get CameraQuality - Camera Quality
* @return float|null
*/
public function getCameraQuality(): ?float
{
	$data = $this->CameraQuality;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("CameraQuality")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("CameraQuality");
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
* Set CameraQuality - Camera Quality
* @param float|null $CameraQuality
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryPhone
*/
public function setCameraQuality (?float $CameraQuality)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("CameraQuality");
	$this->CameraQuality = $fd->preSetData($this, $CameraQuality);
	return $this;
}

/**
* Get ScreenSize - Screen Size
* @return float|null
*/
public function getScreenSize(): ?float
{
	$data = $this->ScreenSize;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("ScreenSize")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("ScreenSize");
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
* Set ScreenSize - Screen Size
* @param float|null $ScreenSize
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryPhone
*/
public function setScreenSize (?float $ScreenSize)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("ScreenSize");
	$this->ScreenSize = $fd->preSetData($this, $ScreenSize);
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryPhone
*/
public function setProcessor (?string $Processor)
{
	$this->Processor = $Processor;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryPhone
*/
public function setWeight (?float $weight)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("weight");
	$this->weight = $fd->preSetData($this, $weight);
	return $this;
}

}

