<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - Makeup [objectbricks]
 * - Skincare [objectbricks]
 * - Haircare [objectbricks]
 * - Perfumes [objectbricks]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Beauty\Listing getList(array $config = [])
*/

class Beauty extends Concrete
{
protected $o_classId = "3";
protected $o_className = "Beauty";
protected $Makeup;
protected $Skincare;
protected $Haircare;
protected $Perfumes;


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
* @return \Pimcore\Model\DataObject\Beauty\Makeup
*/
public function getMakeup(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->Makeup;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Beauty\\Makeup")) {
			$data = new \Pimcore\Model\DataObject\Beauty\Makeup($this, "Makeup");
			$this->Makeup = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Makeup");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
* Set Makeup - Makeup
* @param \Pimcore\Model\DataObject\Objectbrick|null $Makeup
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setMakeup(?\Pimcore\Model\DataObject\Objectbrick $Makeup)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("Makeup");
	$this->Makeup = $fd->preSetData($this, $Makeup);
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Beauty\Skincare
*/
public function getSkincare(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->Skincare;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Beauty\\Skincare")) {
			$data = new \Pimcore\Model\DataObject\Beauty\Skincare($this, "Skincare");
			$this->Skincare = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Skincare");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
* Set Skincare - Skincare
* @param \Pimcore\Model\DataObject\Objectbrick|null $Skincare
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setSkincare(?\Pimcore\Model\DataObject\Objectbrick $Skincare)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("Skincare");
	$this->Skincare = $fd->preSetData($this, $Skincare);
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Beauty\Haircare
*/
public function getHaircare(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->Haircare;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Beauty\\Haircare")) {
			$data = new \Pimcore\Model\DataObject\Beauty\Haircare($this, "Haircare");
			$this->Haircare = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Haircare");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
* Set Haircare - Haircare
* @param \Pimcore\Model\DataObject\Objectbrick|null $Haircare
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setHaircare(?\Pimcore\Model\DataObject\Objectbrick $Haircare)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("Haircare");
	$this->Haircare = $fd->preSetData($this, $Haircare);
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Beauty\Perfumes
*/
public function getPerfumes(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->Perfumes;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Beauty\\Perfumes")) {
			$data = new \Pimcore\Model\DataObject\Beauty\Perfumes($this, "Perfumes");
			$this->Perfumes = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Perfumes");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
* Set Perfumes - Perfumes
* @param \Pimcore\Model\DataObject\Objectbrick|null $Perfumes
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setPerfumes(?\Pimcore\Model\DataObject\Objectbrick $Perfumes)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("Perfumes");
	$this->Perfumes = $fd->preSetData($this, $Perfumes);
	return $this;
}

}

