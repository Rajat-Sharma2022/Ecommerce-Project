<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - sku [input]
 * - description [input]
 * - photo [image]
 * - price [numeric]
 * - Mfd [date]
 * - expiry [date]
 * - category [objectbricks]
 * - select [select]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\BeautyProduct\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\BeautyProduct\Listing|\Pimcore\Model\DataObject\BeautyProduct|null getBySku($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\BeautyProduct\Listing|\Pimcore\Model\DataObject\BeautyProduct|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\BeautyProduct\Listing|\Pimcore\Model\DataObject\BeautyProduct|null getByPhoto($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\BeautyProduct\Listing|\Pimcore\Model\DataObject\BeautyProduct|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\BeautyProduct\Listing|\Pimcore\Model\DataObject\BeautyProduct|null getByMfd($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\BeautyProduct\Listing|\Pimcore\Model\DataObject\BeautyProduct|null getByExpiry($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\BeautyProduct\Listing|\Pimcore\Model\DataObject\BeautyProduct|null getBySelect($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class BeautyProduct extends Concrete
{
protected $o_classId = "7";
protected $o_className = "beautyProduct";
protected $sku;
protected $description;
protected $photo;
protected $price;
protected $Mfd;
protected $expiry;
protected $category;
protected $select;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\BeautyProduct
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
* @return \Pimcore\Model\DataObject\BeautyProduct
*/
public function setSku(?string $sku)
{
	$this->sku = $sku;

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
* @return \Pimcore\Model\DataObject\BeautyProduct
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
* @return \Pimcore\Model\DataObject\BeautyProduct
*/
public function setPhoto(?\Pimcore\Model\Asset\Image $photo)
{
	$this->photo = $photo;

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
* @return \Pimcore\Model\DataObject\BeautyProduct
*/
public function setPrice(?float $price)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("price");
	$this->price = $fd->preSetData($this, $price);
	return $this;
}

/**
* Get Mfd - Mfd
* @return \Carbon\Carbon|null
*/
public function getMfd(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Mfd");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Mfd;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Mfd - Mfd
* @param \Carbon\Carbon|null $Mfd
* @return \Pimcore\Model\DataObject\BeautyProduct
*/
public function setMfd(?\Carbon\Carbon $Mfd)
{
	$this->Mfd = $Mfd;

	return $this;
}

/**
* Get expiry - Expiry
* @return \Carbon\Carbon|null
*/
public function getExpiry(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("expiry");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->expiry;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set expiry - Expiry
* @param \Carbon\Carbon|null $expiry
* @return \Pimcore\Model\DataObject\BeautyProduct
*/
public function setExpiry(?\Carbon\Carbon $expiry)
{
	$this->expiry = $expiry;

	return $this;
}

/**
* @return \Pimcore\Model\DataObject\BeautyProduct\Category
*/
public function getCategory(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->category;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\BeautyProduct\\Category")) {
			$data = new \Pimcore\Model\DataObject\BeautyProduct\Category($this, "category");
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
* @return \Pimcore\Model\DataObject\BeautyProduct
*/
public function setCategory(?\Pimcore\Model\DataObject\Objectbrick $category)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("category");
	$this->category = $fd->preSetData($this, $category);
	return $this;
}

/**
* Get select - Select
* @return string|null
*/
public function getSelect(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("select");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->select;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set select - Select
* @param string|null $select
* @return \Pimcore\Model\DataObject\BeautyProduct
*/
public function setSelect(?string $select)
{
	$this->select = $select;

	return $this;
}

}

