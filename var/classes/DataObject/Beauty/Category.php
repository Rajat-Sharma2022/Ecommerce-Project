<?php

namespace Pimcore\Model\DataObject\Beauty;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class Category extends \Pimcore\Model\DataObject\Objectbrick {

<<<<<<< HEAD
protected $brickGetters = ['Perfume','haircare','Makeup','skincare'];


protected $Perfume = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Perfume|null
*/
public function getPerfume(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Perfume) &&
		$this->Perfume->getDoDelete()) {
			return null;
	}
	return $this->Perfume;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Perfume $Perfume
* @return \Pimcore\Model\DataObject\Beauty\Category
*/
public function setPerfume($Perfume)
{
	$this->Perfume = $Perfume;
	return $this;
}

=======
protected $brickGetters = ['haircare','Makeup','Perfume','skincare'];


>>>>>>> 562b9bf7067eb450b37191d10a3bd6e0c708cb9d
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
* @return \Pimcore\Model\DataObject\Beauty\Category
*/
public function setHaircare($haircare)
{
	$this->haircare = $haircare;
	return $this;
}

protected $Makeup = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup|null
*/
public function getMakeup(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Makeup) &&
		$this->Makeup->getDoDelete()) {
			return null;
	}
	return $this->Makeup;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Makeup $Makeup
* @return \Pimcore\Model\DataObject\Beauty\Category
*/
public function setMakeup($Makeup)
{
	$this->Makeup = $Makeup;
	return $this;
}

<<<<<<< HEAD
=======
protected $Perfume = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Perfume|null
*/
public function getPerfume(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Perfume) &&
		$this->Perfume->getDoDelete()) {
			return null;
	}
	return $this->Perfume;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Perfume $Perfume
* @return \Pimcore\Model\DataObject\Beauty\Category
*/
public function setPerfume($Perfume)
{
	$this->Perfume = $Perfume;
	return $this;
}

>>>>>>> 562b9bf7067eb450b37191d10a3bd6e0c708cb9d
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
* @return \Pimcore\Model\DataObject\Beauty\Category
*/
public function setSkincare($skincare)
{
	$this->skincare = $skincare;
	return $this;
}

}

