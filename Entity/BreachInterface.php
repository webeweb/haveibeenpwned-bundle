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
 * Breach interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Entity
 */
interface BreachInterface extends HaveIBeenPwnedEntityInterface {

    /**
     * Get the name.
     *
     * @return string Returns the name.
     */
    public function getHaveIBeenPwnedName();
}
