<?php

namespace Pimcore\Model\DataObject\ElectronicsDevices;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class Category extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['categoryLaptop','categoryPhone','categoryTv'];


protected $categoryLaptop = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryLaptop|null
*/
public function getCategoryLaptop(bool $includeDeletedBricks = false)
{
	if(!$this->categoryLaptop && \Pimcore\Model\DataObject::doGetInheritedValues($this->getObject())) { 
		try {
			$brickContainer = $this->getObject()->getValueFromParent("category");
			if(!empty($brickContainer)) {
				//check if parent object has brick, and if so, create an empty brick to enable inheritance
				$parentBrick = $this->getObject()->getValueFromParent("category")->getCategoryLaptop($includeDeletedBricks);
				if (!empty($parentBrick)) {
					$brickType = "\\Pimcore\\Model\\DataObject\\Objectbrick\\Data\\" . ucfirst($parentBrick->getType());
					$brick = new $brickType($this->getObject());
					$brick->setFieldname("category");
					$this->setCategoryLaptop($brick);
					return $brick;
				}
			}
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if(!$includeDeletedBricks &&
		isset($this->categoryLaptop) &&
		$this->categoryLaptop->getDoDelete()) {
			return null;
	}
	return $this->categoryLaptop;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\CategoryLaptop $categoryLaptop
* @return \Pimcore\Model\DataObject\ElectronicsDevices\Category
*/
public function setCategoryLaptop($categoryLaptop)
{
	$this->categoryLaptop = $categoryLaptop;
	return $this;
}

protected $categoryPhone = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryPhone|null
*/
public function getCategoryPhone(bool $includeDeletedBricks = false)
{
	if(!$this->categoryPhone && \Pimcore\Model\DataObject::doGetInheritedValues($this->getObject())) { 
		try {
			$brickContainer = $this->getObject()->getValueFromParent("category");
			if(!empty($brickContainer)) {
				//check if parent object has brick, and if so, create an empty brick to enable inheritance
				$parentBrick = $this->getObject()->getValueFromParent("category")->getCategoryPhone($includeDeletedBricks);
				if (!empty($parentBrick)) {
					$brickType = "\\Pimcore\\Model\\DataObject\\Objectbrick\\Data\\" . ucfirst($parentBrick->getType());
					$brick = new $brickType($this->getObject());
					$brick->setFieldname("category");
					$this->setCategoryPhone($brick);
					return $brick;
				}
			}
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if(!$includeDeletedBricks &&
		isset($this->categoryPhone) &&
		$this->categoryPhone->getDoDelete()) {
			return null;
	}
	return $this->categoryPhone;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\CategoryPhone $categoryPhone
* @return \Pimcore\Model\DataObject\ElectronicsDevices\Category
*/
public function setCategoryPhone($categoryPhone)
{
	$this->categoryPhone = $categoryPhone;
	return $this;
}

protected $categoryTv = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\CategoryTv|null
*/
public function getCategoryTv(bool $includeDeletedBricks = false)
{
	if(!$this->categoryTv && \Pimcore\Model\DataObject::doGetInheritedValues($this->getObject())) { 
		try {
			$brickContainer = $this->getObject()->getValueFromParent("category");
			if(!empty($brickContainer)) {
				//check if parent object has brick, and if so, create an empty brick to enable inheritance
				$parentBrick = $this->getObject()->getValueFromParent("category")->getCategoryTv($includeDeletedBricks);
				if (!empty($parentBrick)) {
					$brickType = "\\Pimcore\\Model\\DataObject\\Objectbrick\\Data\\" . ucfirst($parentBrick->getType());
					$brick = new $brickType($this->getObject());
					$brick->setFieldname("category");
					$this->setCategoryTv($brick);
					return $brick;
				}
			}
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if(!$includeDeletedBricks &&
		isset($this->categoryTv) &&
		$this->categoryTv->getDoDelete()) {
			return null;
	}
	return $this->categoryTv;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\CategoryTv $categoryTv
* @return \Pimcore\Model\DataObject\ElectronicsDevices\Category
*/
public function setCategoryTv($categoryTv)
{
	$this->categoryTv = $categoryTv;
	return $this;
}

}

