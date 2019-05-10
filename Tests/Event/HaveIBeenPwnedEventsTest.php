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
use WBW\Bundle\SMSModeBundle\Event\SMSModeEvents;

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
    public function testConstruct() {

        $this->assertEquals("wbw.haveibeenpwned.event.breach", HaveIBeenPwnedEvents::BREACH);
        $this->assertEquals("wbw.haveibeenpwned.event.breached_account", HaveIBeenPwnedEvents::BREACHED_ACCOUNT);
        $this->assertEquals("wbw.haveibeenpwned.event.breaches", HaveIBeenPwnedEvents::BREACHES);
        $this->assertEquals("wbw.haveibeenpwned.event.data_classes", HaveIBeenPwnedEvents::DATA_CLASSES);
        $this->assertEquals("wbw.haveibeenpwned.event.paste_account", HaveIBeenPwnedEvents::PASTE_ACCOUNT);
        $this->assertEquals("wbw.haveibeenpwned.event.range", HaveIBeenPwnedEvents::RANGE);
    }
}
