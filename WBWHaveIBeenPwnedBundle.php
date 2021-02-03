<?php

/*
 * This file is part of the haveibeenpwned-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HaveIBeenPwnedBundle;

use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use WBW\Bundle\HaveIBeenPwnedBundle\DependencyInjection\WBWHaveIBeenPwnedExtension;

/**
 * HaveIBeenPwned bundle.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle
 */
class WBWHaveIBeenPwnedBundle extends Bundle {

    /**
     * {@inheritDoc}
     */
    public function getContainerExtension(): Extension {
        return new WBWHaveIBeenPwnedExtension();
    }
}
