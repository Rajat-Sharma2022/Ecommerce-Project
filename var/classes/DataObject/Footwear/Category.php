<?php

namespace Pimcore\Model\DataObject\Footwear;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class Category extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['menFootwear','womenFootwear'];


protected $menFootwear = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\MenFootwear|null
*/
public function getMenFootwear(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->menFootwear) &&
		$this->menFootwear->getDoDelete()) {
			return null;
	}
	return $this->menFootwear;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\MenFootwear $menFootwear
* @return \Pimcore\Model\DataObject\Footwear\Category
*/
public function setMenFootwear($menFootwear)
{
	$this->menFootwear = $menFootwear;
	return $this;
}

protected $womenFootwear = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WomenFootwear|null
*/
public function getWomenFootwear(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->womenFootwear) &&
		$this->womenFootwear->getDoDelete()) {
			return null;
	}
	return $this->womenFootwear;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\WomenFootwear $womenFootwear
* @return \Pimcore\Model\DataObject\Footwear\Category
*/
public function setWomenFootwear($womenFootwear)
{
	$this->womenFootwear = $womenFootwear;
	return $this;
}

}

