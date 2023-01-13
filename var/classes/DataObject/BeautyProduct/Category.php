<?php

namespace Pimcore\Model\DataObject\BeautyProduct;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class Category extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['haircare','makeup','perfume','skincare'];


protected $haircare = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Haircare|null
*/
public function getHaircare(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->haircare) &&
		$this->haircare->getDoDelete()) {
			return null;
	}
	return $this->haircare;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Haircare $haircare
* @return \Pimcore\Model\DataObject\BeautyProduct\Category
*/
public function setHaircare($haircare)
{
	$this->haircare = $haircare;
	return $this;
}

protected $makeup = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup|null
*/
public function getMakeup(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->makeup) &&
		$this->makeup->getDoDelete()) {
			return null;
	}
	return $this->makeup;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Makeup $makeup
* @return \Pimcore\Model\DataObject\BeautyProduct\Category
*/
public function setMakeup($makeup)
{
	$this->makeup = $makeup;
	return $this;
}

protected $perfume = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Perfume|null
*/
public function getPerfume(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->perfume) &&
		$this->perfume->getDoDelete()) {
			return null;
	}
	return $this->perfume;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Perfume $perfume
* @return \Pimcore\Model\DataObject\BeautyProduct\Category
*/
public function setPerfume($perfume)
{
	$this->perfume = $perfume;
	return $this;
}

protected $skincare = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Skincare|null
*/
public function getSkincare(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->skincare) &&
		$this->skincare->getDoDelete()) {
			return null;
	}
	return $this->skincare;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Skincare $skincare
* @return \Pimcore\Model\DataObject\BeautyProduct\Category
*/
public function setSkincare($skincare)
{
	$this->skincare = $skincare;
	return $this;
}

}

