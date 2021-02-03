<?php

/*
 * This file is part of the haveibeenpwned-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HaveIBeenPwnedBundle\Tests;

use WBW\Bundle\HaveIBeenPwnedBundle\DependencyInjection\WBWHaveIBeenPwnedExtension;
use WBW\Bundle\HaveIBeenPwnedBundle\WBWHaveIBeenPwnedBundle;

/**
 * HaveIBeenPwned bundle test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Tests
 */
class WBWHaveIBeenPwnedBundleTest extends AbstractTestCase {

    /**
     * Tests the getContainerExtension() method.
     *
     * @return void
     */
    public function testGetContainerExtension(): void {

        $obj = new WBWHaveIBeenPwnedBundle();

        $res = $obj->getContainerExtension();
        $this->assertInstanceOf(WBWHaveIBeenPwnedExtension::class, $res);
    }
}
