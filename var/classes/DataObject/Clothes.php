<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - sku [input]
 * - price [numeric]
 * - color [input]
 * - category [objectbricks]
 * - description [input]
 * - photo [image]
 * - gender [select]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Clothes\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Clothes\Listing|\Pimcore\Model\DataObject\Clothes|null getBySku($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothes\Listing|\Pimcore\Model\DataObject\Clothes|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothes\Listing|\Pimcore\Model\DataObject\Clothes|null getByColor($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothes\Listing|\Pimcore\Model\DataObject\Clothes|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothes\Listing|\Pimcore\Model\DataObject\Clothes|null getByPhoto($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothes\Listing|\Pimcore\Model\DataObject\Clothes|null getByGender($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Clothes extends Concrete
{
protected $o_classId = "5";
protected $o_className = "clothes";
protected $sku;
protected $price;
protected $color;
protected $category;
protected $description;
protected $photo;
protected $gender;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Clothes
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
* @return \Pimcore\Model\DataObject\Clothes
*/
public function setSku(?string $sku)
{
	$this->sku = $sku;

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
* @return \Pimcore\Model\DataObject\Clothes
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
* @return \Pimcore\Model\DataObject\Clothes
*/
public function setColor(?string $color)
{
	$this->color = $color;

	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Clothes\Category
*/
public function getCategory(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->category;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Clothes\\Category")) {
			$data = new \Pimcore\Model\DataObject\Clothes\Category($this, "category");
			$this->category = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("category");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
* Set category - Category
* @param \Pimcore\Model\DataObject\Objectbrick|null $category
* @return \Pimcore\Model\DataObject\Clothes
*/
public function setCategory(?\Pimcore\Model\DataObject\Objectbrick $category)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("category");
	$this->category = $fd->preSetData($this, $category);
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
* @return \Pimcore\Model\DataObject\Clothes
*/
public function setDescription(?string $description)
{
	$this->description = $description;

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
* @return \Pimcore\Model\DataObject\Clothes
*/
public function setPhoto(?\Pimcore\Model\Asset\Image $photo)
{
	$this->photo = $photo;

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
* @return \Pimcore\Model\DataObject\Clothes
*/
public function setGender(?string $gender)
{
	$this->gender = $gender;

	return $this;
}

}

