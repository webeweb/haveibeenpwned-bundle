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

use WBW\Bundle\HaveIBeenPwnedBundle\WBWHaveIBeenPwnedEvents;

/**
 * HaveIBeenPwned events test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Tests
 */
class WBWHaveIBeenPwnedEventsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("wbw.haveibeenpwned.event.breach", WBWHaveIBeenPwnedEvents::BREACH);
        $this->assertEquals("wbw.haveibeenpwned.event.breached_account", WBWHaveIBeenPwnedEvents::BREACHED_ACCOUNT);
        $this->assertEquals("wbw.haveibeenpwned.event.breaches", WBWHaveIBeenPwnedEvents::BREACHES);
        $this->assertEquals("wbw.haveibeenpwned.event.data_classes", WBWHaveIBeenPwnedEvents::DATA_CLASSES);
        $this->assertEquals("wbw.haveibeenpwned.event.paste_account", WBWHaveIBeenPwnedEvents::PASTE_ACCOUNT);
        $this->assertEquals("wbw.haveibeenpwned.event.range", WBWHaveIBeenPwnedEvents::RANGE);
    }
}
