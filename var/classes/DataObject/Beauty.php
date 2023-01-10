<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
<<<<<<< HEAD
 * - price [numeric]
 * - descriptiom [wysiwyg]
 * - image [image]
 * - category [objectbricks]
 * - sku [input]
 * - startdate [date]
 * - enddate [date]
=======
 * - category [objectbricks]
>>>>>>> 562b9bf7067eb450b37191d10a3bd6e0c708cb9d
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Beauty\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByDescriptiom($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByImage($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getBySku($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByStartdate($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByEnddate($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Beauty extends Concrete
{
protected $o_classId = "3";
protected $o_className = "Beauty";
<<<<<<< HEAD
protected $price;
protected $descriptiom;
protected $image;
protected $category;
protected $sku;
protected $startdate;
protected $enddate;
=======
protected $category;
>>>>>>> 562b9bf7067eb450b37191d10a3bd6e0c708cb9d


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Beauty
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
<<<<<<< HEAD
* Get price - Price
* @return float|null
*/
public function getPrice(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("price");
=======
* @return \Pimcore\Model\DataObject\Beauty\Category
*/
public function getCategory(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->category;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Beauty\\Category")) {
			$data = new \Pimcore\Model\DataObject\Beauty\Category($this, "category");
			$this->category = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("category");
>>>>>>> 562b9bf7067eb450b37191d10a3bd6e0c708cb9d
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
<<<<<<< HEAD
* Set price - Price
* @param float|null $price
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setPrice(?float $price)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("price");
	$this->price = $fd->preSetData($this, $price);
	return $this;
}

/**
* Get descriptiom - Descriptiom
* @return string|null
*/
public function getDescriptiom(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("descriptiom");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("descriptiom")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set descriptiom - Descriptiom
* @param string|null $descriptiom
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setDescriptiom(?string $descriptiom)
{
	$this->descriptiom = $descriptiom;

	return $this;
}

/**
* Get image - Image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getImage(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("image");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->image;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set image - Image
* @param \Pimcore\Model\Asset\Image|null $image
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setImage(?\Pimcore\Model\Asset\Image $image)
{
	$this->image = $image;

	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Beauty\Category
*/
public function getCategory(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->category;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Beauty\\Category")) {
			$data = new \Pimcore\Model\DataObject\Beauty\Category($this, "category");
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
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setCategory(?\Pimcore\Model\DataObject\Objectbrick $category)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("category");
	$this->category = $fd->preSetData($this, $category);
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
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setSku(?string $sku)
{
	$this->sku = $sku;

	return $this;
}

/**
* Get startdate - startdate
* @return \Carbon\Carbon|null
*/
public function getStartdate(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("startdate");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->startdate;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set startdate - startdate
* @param \Carbon\Carbon|null $startdate
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setStartdate(?\Carbon\Carbon $startdate)
{
	$this->startdate = $startdate;

	return $this;
}

/**
* Get enddate - enddate
* @return \Carbon\Carbon|null
*/
public function getEnddate(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("enddate");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->enddate;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set enddate - enddate
* @param \Carbon\Carbon|null $enddate
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setEnddate(?\Carbon\Carbon $enddate)
{
	$this->enddate = $enddate;

=======
* Set category - Category
* @param \Pimcore\Model\DataObject\Objectbrick|null $category
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setCategory(?\Pimcore\Model\DataObject\Objectbrick $category)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("category");
	$this->category = $fd->preSetData($this, $category);
>>>>>>> 562b9bf7067eb450b37191d10a3bd6e0c708cb9d
	return $this;
}

}

