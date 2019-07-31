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

use WBW\Bundle\HaveIBeenPwnedBundle\Event\BreachedAccountEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\Tests\AbstractTestCase;
use WBW\Bundle\HaveIBeenPwnedBundle\WBWHaveIBeenPwnedEvents;
use WBW\Library\HaveIBeenPwned\Model\Request\BreachedAccountRequest;
use WBW\Library\HaveIBeenPwned\Model\Response\BreachesResponse;

/**
 * Breached account event test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Tests\Event
 */
class BreachedAccountEventTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BreachedAccountEvent($this->breachedAccount);

        $this->assertEquals(WBWHaveIBeenPwnedEvents::BREACHED_ACCOUNT, $obj->getEventName());

        $this->assertNull($obj->getRequest());
        $this->assertNull($obj->getResponse());

        $this->assertSame($this->breachedAccount, $obj->getBreachedAccount());
    }

    /**
     * Tests the setRequest() method.
     *
     * @return void
     */
    public function testSetRequest() {

        // Set a Breached account request mock.
        $request = new BreachedAccountRequest();

        $obj = new BreachedAccountEvent($this->breachedAccount);

        $obj->setRequest($request);
        $this->assertSame($request, $obj->getRequest());
    }

    /**
     * Tests the setResponse() method.
     *
     * @return void
     */
    public function testSetResponse() {

        // Set a Breaches response mock.
        $response = new BreachesResponse();

        $obj = new BreachedAccountEvent($this->breachedAccount);

        $obj->setResponse($response);
        $this->assertSame($response, $obj->getResponse());
    }
}
