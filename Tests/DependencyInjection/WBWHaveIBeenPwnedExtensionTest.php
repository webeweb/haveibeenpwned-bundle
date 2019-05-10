<?php

/*
 * This file is part of the haveibeenpwned-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HaveIBeenPwnedBundle\Tests\DependencyInjection;

use Exception;
use WBW\Bundle\HaveIBeenPwnedBundle\DependencyInjection\WBWHaveIBeenPwnedExtension;
use WBW\Bundle\HaveIBeenPwnedBundle\Tests\AbstractTestCase;

/**
 * HaveIBeenPwned extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Tests\DependencyInjection
 */
class WBWHaveIBeenPwnedExtensionTest extends AbstractTestCase {

    /**
     * Tests the load() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testLoad() {

        $obj = new WBWHaveIBeenPwnedExtension();

        $this->assertNull($obj->load([], $this->containerBuilder));
    }
}
