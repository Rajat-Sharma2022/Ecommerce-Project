<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - sku [input]
 * - footWearType [select]
 * - size [select]
 * - photo [image]
 * - description [input]
 * - brand [select]
 * - price [numeric]
 * - color [input]
 * - material [input]
 * - gender [select]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Footwear\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getBySku($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByFootWearType($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getBySize($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByPhoto($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByBrand($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByColor($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByMaterial($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Footwear\Listing|\Pimcore\Model\DataObject\Footwear|null getByGender($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Footwear extends Concrete
{
protected $o_classId = "6";
protected $o_className = "footwear";
protected $sku;
protected $footWearType;
protected $size;
protected $photo;
protected $description;
protected $brand;
protected $price;
protected $color;
protected $material;
protected $gender;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Footwear
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get sku - Sku
* @return string|null
*/
public function getSku(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("sku");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->sku;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set sku - Sku
* @param string|null $sku
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setSku(?string $sku)
{
	$this->sku = $sku;

	return $this;
}

/**
* Get footWearType - Foot Wear Type
* @return string|null
*/
public function getFootWearType(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("footWearType");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->footWearType;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set footWearType - Foot Wear Type
* @param string|null $footWearType
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setFootWearType(?string $footWearType)
{
	$this->footWearType = $footWearType;

	return $this;
}

/**
* Get size - Size
* @return string|null
*/
public function getSize(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("size");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->size;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set size - Size
* @param string|null $size
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setSize(?string $size)
{
	$this->size = $size;

	return $this;
}

/**
* Get photo - Photo
* @return \Pimcore\Model\Asset\Image|null
*/
public function getPhoto(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("photo");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->photo;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set photo - Photo
* @param \Pimcore\Model\Asset\Image|null $photo
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setPhoto(?\Pimcore\Model\Asset\Image $photo)
{
	$this->photo = $photo;

	return $this;
}

/**
* Get description - Description
* @return string|null
*/
public function getDescription(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("description");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->description;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set description - Description
* @param string|null $description
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setDescription(?string $description)
{
	$this->description = $description;

	return $this;
}

/**
* Get brand - Brand
* @return string|null
*/
public function getBrand(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("brand");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->brand;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set brand - Brand
* @param string|null $brand
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setBrand(?string $brand)
{
	$this->brand = $brand;

	return $this;
}

/**
* Get price - Price
* @return float|null
*/
public function getPrice(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("price");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->price;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set price - Price
* @param float|null $price
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setPrice(?float $price)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("price");
	$this->price = $fd->preSetData($this, $price);
	return $this;
}

/**
* Get color - Color
* @return string|null
*/
public function getColor(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("color");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->color;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set color - Color
* @param string|null $color
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setColor(?string $color)
{
	$this->color = $color;

	return $this;
}

/**
* Get material - Material
* @return string|null
*/
public function getMaterial(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("material");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->material;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set material - Material
* @param string|null $material
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setMaterial(?string $material)
{
	$this->material = $material;

	return $this;
}

/**
* Get gender - Gender
* @return string|null
*/
public function getGender(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("gender");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->gender;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set gender - Gender
* @param string|null $gender
* @return \Pimcore\Model\DataObject\Footwear
*/
public function setGender(?string $gender)
{
	$this->gender = $gender;

	return $this;
}

}

