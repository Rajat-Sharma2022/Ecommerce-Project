<?php

/**
 * Inheritance: yes
 * Variants: yes
 *
 * Fields Summary:
 * - sku [input]
 * - price [numeric]
 * - category [objectbricks]
 * - description [input]
 * - photo [image]
 * - product [select]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\ElectronicsDevices\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\ElectronicsDevices\Listing|\Pimcore\Model\DataObject\ElectronicsDevices|null getBySku($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ElectronicsDevices\Listing|\Pimcore\Model\DataObject\ElectronicsDevices|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ElectronicsDevices\Listing|\Pimcore\Model\DataObject\ElectronicsDevices|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ElectronicsDevices\Listing|\Pimcore\Model\DataObject\ElectronicsDevices|null getByPhoto($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\ElectronicsDevices\Listing|\Pimcore\Model\DataObject\ElectronicsDevices|null getByProduct($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class ElectronicsDevices extends Concrete
{
protected $o_classId = "4";
protected $o_className = "electronicsDevices";
protected $sku;
protected $price;
protected $category;
protected $description;
protected $photo;
protected $product;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\ElectronicsDevices
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

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("sku")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("sku");
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
* Set sku - Sku
* @param string|null $sku
* @return \Pimcore\Model\DataObject\ElectronicsDevices
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

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("price")->isEmpty($data)) {
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
* @return \Pimcore\Model\DataObject\ElectronicsDevices
*/
public function setPrice(?float $price)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("price");
	$this->price = $fd->preSetData($this, $price);
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\ElectronicsDevices\Category
*/
public function getCategory(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->category;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\ElectronicsDevices\\Category")) {
			$data = new \Pimcore\Model\DataObject\ElectronicsDevices\Category($this, "category");
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
* @return \Pimcore\Model\DataObject\ElectronicsDevices
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

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("description")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("description");
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
* Set description - Description
* @param string|null $description
* @return \Pimcore\Model\DataObject\ElectronicsDevices
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

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("photo")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("photo");
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
* Set photo - Photo
* @param \Pimcore\Model\Asset\Image|null $photo
* @return \Pimcore\Model\DataObject\ElectronicsDevices
*/
public function setPhoto(?\Pimcore\Model\Asset\Image $photo)
{
	$this->photo = $photo;

	return $this;
}

/**
* Get product - Product
* @return string|null
*/
public function getProduct(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("product");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->product;

	if (\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("product")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("product");
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
* Set product - Product
* @param string|null $product
* @return \Pimcore\Model\DataObject\ElectronicsDevices
*/
public function setProduct(?string $product)
{
	$this->product = $product;

	return $this;
}

}

