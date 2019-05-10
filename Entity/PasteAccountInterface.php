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
 * Paste account interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Entity
 */
interface PasteAccountInterface extends HaveIBeenPwnedEntityInterface {

    /**
     * Get the account.
     *
     * @return string Returns the account.
     */
    public function getHaveIBeenPwnedAccount();
}
