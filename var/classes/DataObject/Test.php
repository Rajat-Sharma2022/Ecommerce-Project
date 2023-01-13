<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - first [input]
 * - localizedfields [localizedfields]
 * -- content [input]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Test\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Test\Listing|\Pimcore\Model\DataObject\Test|null getByFirst($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Test\Listing|\Pimcore\Model\DataObject\Test|null getByLocalizedfields($field, $value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Test\Listing|\Pimcore\Model\DataObject\Test|null getByContent($value, $locale = null, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Test extends Concrete
{
protected $o_classId = "9";
protected $o_className = "test";
protected $first;
protected $localizedfields;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Test
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get first - First
* @return string|null
*/
public function getFirst(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("first");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->first;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set first - First
* @param string|null $first
* @return \Pimcore\Model\DataObject\Test
*/
public function setFirst(?string $first)
{
	$this->first = $first;

	return $this;
}

/**
* Get localizedfields - 
* @return \Pimcore\Model\DataObject\Localizedfield|null
*/
public function getLocalizedfields(): ?\Pimcore\Model\DataObject\Localizedfield
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("localizedfields");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("localizedfields")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Get content - Content
* @return string|null
*/
public function getContent($language = null): ?string
{
	$data = $this->getLocalizedfields()->getLocalizedValue("content", $language);
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("content");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set localizedfields - 
* @param \Pimcore\Model\DataObject\Localizedfield|null $localizedfields
* @return \Pimcore\Model\DataObject\Test
*/
public function setLocalizedfields(?\Pimcore\Model\DataObject\Localizedfield $localizedfields)
{
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getLocalizedfields();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$this->markFieldDirty("localizedfields", true);
	$this->localizedfields = $localizedfields;

	return $this;
}

/**
* Set content - Content
* @param string|null $content
* @return \Pimcore\Model\DataObject\Test
*/
public function setContent (?string $content, $language = null)
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("content", $content, $language, !$isEqual);

	return $this;
}

}

