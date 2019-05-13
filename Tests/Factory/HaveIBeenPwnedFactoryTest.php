<?php

/*
 * This file is part of the haveibeenpwned-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HaveIBeenPwnedBundle\Tests\Factory;

use WBW\Bundle\HaveIBeenPwnedBundle\Factory\HaveIBeenPwnedFactory;
use WBW\Bundle\HaveIBeenPwnedBundle\Tests\AbstractTestCase;
use WBW\Library\HaveIBeenPwned\Model\Request\BreachedAccountRequest;
use WBW\Library\HaveIBeenPwned\Model\Request\BreachesRequest;
use WBW\Library\HaveIBeenPwned\Model\Request\BreachRequest;
use WBW\Library\HaveIBeenPwned\Model\Request\PasteAccountRequest;
use WBW\Library\HaveIBeenPwned\Model\Request\RangeRequest;

/**
 * HaveIBeenPwned factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Tests\Factory
 */
class HaveIBeenPwnedFactoryTest extends AbstractTestCase {

    /**
     * Tests the newBreachRequest() method.
     *
     * @return void
     */
    public function testNewBreachRequest() {

        $res = HaveIBeenPwnedFactory::newBreachRequest($this->breach);
        $this->assertInstanceOf(BreachRequest::class, $res);

        $this->assertEquals("Adobe", $res->getName());
    }

    /**
     * Tests the newBreachedAccountRequest() method.
     *
     * @return void
     */
    public function testNewBreachedAccountRequest() {

        $res = HaveIBeenPwnedFactory::newBreachedAccountRequest($this->breachedAccount);
        $this->assertInstanceOf(BreachedAccountRequest::class, $res);

        $this->assertEquals("john.doe@gmail.com", $res->getAccount());
        $this->assertEquals("adobe.com", $res->getDomain());
        $this->assertTrue($res->getIncludeUnverified());
        $this->assertFalse($res->getTruncateResponse());
    }

    /**
     * Tests the newBreachesRequest() method.
     *
     * @return void
     */
    public function testNewBreachesRequest() {

        $res = HaveIBeenPwnedFactory::newBreachesRequest($this->breaches);
        $this->assertInstanceOf(BreachesRequest::class, $res);

        $this->assertEquals("adobe.com", $res->getDomain());
    }

    /**
     * Tests the newPasteAccountRequest() method.
     *
     * @return void
     */
    public function testNewPasteAccountRequest() {

        $res = HaveIBeenPwnedFactory::newPasteAccountRequest($this->pasteAccount);
        $this->assertInstanceOf(PasteAccountRequest::class, $res);

        $this->assertEquals("john.doe@gmail.com", $res->getAccount());
    }

    /**
     * Tests the newRangeRequest() method.
     *
     * @return void
     */
    public function testNewRangeRequest() {

        $res = HaveIBeenPwnedFactory::newRangeRequest($this->range);
        $this->assertInstanceOf(RangeRequest::class, $res);

        $this->assertEquals("21BD1", $res->getHash());
    }
}
