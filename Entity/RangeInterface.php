<?php

/*
 * This file is part of the haveibeenpwned-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HaveIBeenPwnedBundle\Entity;

/**
 * Range interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Entity
 */
interface RangeInterface extends HaveIBeenPwnedEntityInterface {

    /**
     * Get the hash.
     *
     * @return string Returns the hash.
     */
    public function getHaveIBeenPwnedHash();
}
