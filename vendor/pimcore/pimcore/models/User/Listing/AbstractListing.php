<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Model\User\Listing;

use Pimcore\Model;

/**
 * @internal
 *
 * @method \Pimcore\Model\User\Listing\AbstractListing\Dao getDao()
 * @method Model\User[] load()
 * @method Model\User|false current()
 * @method int getTotalCount()
 */
abstract class AbstractListing extends Model\Listing\AbstractListing
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->getData();
    }

    /**
     * @param array $items
     *
     * @return $this
     */
    public function setItems($items)
    {
        return $this->setData($items);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
