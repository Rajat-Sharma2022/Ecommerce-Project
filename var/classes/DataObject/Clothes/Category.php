<?php

namespace Pimcore\Model\DataObject\Clothes;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class Category extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['WomensWear','MensWear'];


protected $WomensWear = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WomensWear|null
*/
public function getWomensWear(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->WomensWear) &&
		$this->WomensWear->getDoDelete()) {
			return null;
	}
	return $this->WomensWear;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\WomensWear $WomensWear
* @return \Pimcore\Model\DataObject\Clothes\Category
*/
public function setWomensWear($WomensWear)
{
	$this->WomensWear = $WomensWear;
	return $this;
}

protected $MensWear = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\MensWear|null
*/
public function getMensWear(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->MensWear) &&
		$this->MensWear->getDoDelete()) {
			return null;
	}
	return $this->MensWear;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\MensWear $MensWear
* @return \Pimcore\Model\DataObject\Clothes\Category
*/
public function setMensWear($MensWear)
{
	$this->MensWear = $MensWear;
	return $this;
}

}

