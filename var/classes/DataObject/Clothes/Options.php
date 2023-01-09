<?php

namespace Pimcore\Model\DataObject\Clothes;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class Options extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['menClothing','womenClothing'];


protected $menClothing = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\MenClothing|null
*/
public function getMenClothing(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->menClothing) &&
		$this->menClothing->getDoDelete()) {
			return null;
	}
	return $this->menClothing;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\MenClothing $menClothing
* @return \Pimcore\Model\DataObject\Clothes\Options
*/
public function setMenClothing($menClothing)
{
	$this->menClothing = $menClothing;
	return $this;
}

protected $womenClothing = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\WomenClothing|null
*/
public function getWomenClothing(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->womenClothing) &&
		$this->womenClothing->getDoDelete()) {
			return null;
	}
	return $this->womenClothing;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\WomenClothing $womenClothing
* @return \Pimcore\Model\DataObject\Clothes\Options
*/
public function setWomenClothing($womenClothing)
{
	$this->womenClothing = $womenClothing;
	return $this;
}

}

