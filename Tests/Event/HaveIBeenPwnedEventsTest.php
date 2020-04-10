<?php

/*
 * This file is part of the haveibeenpwned-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HaveIBeenPwnedBundle\Tests\Event;

use WBW\Bundle\HaveIBeenPwnedBundle\Event\HaveIBeenPwnedEvents;
use WBW\Bundle\HaveIBeenPwnedBundle\Tests\AbstractTestCase;
use WBW\Bundle\HaveIBeenPwnedBundle\WBWHaveIBeenPwnedEvents;

/**
 * HaveIBeenPwned events test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Tests\Event
 */
class HaveIBeenPwnedEventsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals(WBWHaveIBeenPwnedEvents::BREACH, HaveIBeenPwnedEvents::BREACH);
        $this->assertEquals(WBWHaveIBeenPwnedEvents::BREACHED_ACCOUNT, HaveIBeenPwnedEvents::BREACHED_ACCOUNT);
        $this->assertEquals(WBWHaveIBeenPwnedEvents::BREACHES, HaveIBeenPwnedEvents::BREACHES);
        $this->assertEquals(WBWHaveIBeenPwnedEvents::DATA_CLASSES, HaveIBeenPwnedEvents::DATA_CLASSES);
        $this->assertEquals(WBWHaveIBeenPwnedEvents::PASTE_ACCOUNT, HaveIBeenPwnedEvents::PASTE_ACCOUNT);
        $this->assertEquals(WBWHaveIBeenPwnedEvents::RANGE, HaveIBeenPwnedEvents::RANGE);
    }
}
