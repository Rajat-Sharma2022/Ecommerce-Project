<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - options [objectbricks]
 * - sku [input]
 * - price [numeric]
 * - color [rgbaColor]
 * - gender [select]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Clothes\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Clothes\Listing|\Pimcore\Model\DataObject\Clothes|null getBySku($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothes\Listing|\Pimcore\Model\DataObject\Clothes|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothes\Listing|\Pimcore\Model\DataObject\Clothes|null getByGender($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Clothes extends Concrete
{
protected $o_classId = "4";
protected $o_className = "clothes";
protected $options;
protected $sku;
protected $price;
protected $color;
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
* @return \Pimcore\Model\DataObject\Clothes\Options
*/
public function getOptions(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->options;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Clothes\\Options")) {
			$data = new \Pimcore\Model\DataObject\Clothes\Options($this, "options");
			$this->options = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("options");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
* Set options - Options
* @param \Pimcore\Model\DataObject\Objectbrick|null $options
* @return \Pimcore\Model\DataObject\Clothes
*/
public function setOptions(?\Pimcore\Model\DataObject\Objectbrick $options)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("options");
	$this->options = $fd->preSetData($this, $options);
	return $this;
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
* @return \Pimcore\Model\DataObject\Data\RgbaColor|null
*/
public function getColor(): ?\Pimcore\Model\DataObject\Data\RgbaColor
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
* @param \Pimcore\Model\DataObject\Data\RgbaColor|null $color
* @return \Pimcore\Model\DataObject\Clothes
*/
public function setColor(?\Pimcore\Model\DataObject\Data\RgbaColor $color)
{
	$this->color = $color;

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

