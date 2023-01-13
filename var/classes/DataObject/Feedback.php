<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - name [input]
 * - email [input]
 * - likes [textarea]
 * - others [textarea]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Feedback\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Feedback\Listing|\Pimcore\Model\DataObject\Feedback|null getByName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Feedback\Listing|\Pimcore\Model\DataObject\Feedback|null getByEmail($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Feedback\Listing|\Pimcore\Model\DataObject\Feedback|null getByLikes($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Feedback\Listing|\Pimcore\Model\DataObject\Feedback|null getByOthers($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Feedback extends Concrete
{
protected $o_classId = "8";
protected $o_className = "feedback";
protected $name;
protected $email;
protected $likes;
protected $others;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Feedback
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - Name
* @return string|null
*/
public function getName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("name");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->name;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set name - Name
* @param string|null $name
* @return \Pimcore\Model\DataObject\Feedback
*/
public function setName(?string $name)
{
	$this->name = $name;

	return $this;
}

/**
* Get email - Email
* @return string|null
*/
public function getEmail(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("email");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->email;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set email - Email
* @param string|null $email
* @return \Pimcore\Model\DataObject\Feedback
*/
public function setEmail(?string $email)
{
	$this->email = $email;

	return $this;
}

/**
* Get likes - Likes
* @return string|null
*/
public function getLikes(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("likes");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->likes;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set likes - Likes
* @param string|null $likes
* @return \Pimcore\Model\DataObject\Feedback
*/
public function setLikes(?string $likes)
{
	$this->likes = $likes;

	return $this;
}

/**
* Get others - Others
* @return string|null
*/
public function getOthers(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("others");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->others;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set others - Others
* @param string|null $others
* @return \Pimcore\Model\DataObject\Feedback
*/
public function setOthers(?string $others)
{
	$this->others = $others;

	return $this;
}

}

