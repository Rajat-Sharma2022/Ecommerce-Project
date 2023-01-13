<?php

namespace App\EventListeners;

use Pimcore\Model\DataObject\BeautyProduct;

class MyObjectListener
{
 public function beforeUpdate(\Pimcore\Event\Model\DataObjectEvent $event)
 {
 $object = $event->getObject();

if ($object instanceof BeautyProduct) {
 if ($object->getMfd() > $object->getExpiry()) {
 throw new \Exception("expiry cant be less than mfg");
 }

 }
 }
}
