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

use WBW\Bundle\HaveIBeenPwnedBundle\Event\BreachEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\Event\HaveIBeenPwnedEvents;
use WBW\Bundle\HaveIBeenPwnedBundle\Tests\AbstractTestCase;
use WBW\Library\HaveIBeenPwned\Model\Request\BreachRequest;
use WBW\Library\HaveIBeenPwned\Model\Response\BreachesResponse;

/**
 * Breach event test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Tests\Event
 */
class BreachEventTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BreachEvent();

        $this->assertEquals(HaveIBeenPwnedEvents::BREACH, $obj->getEventName());

        $this->assertNull($obj->getRequest());
        $this->assertNull($obj->getResponse());
    }

    /**
     * Tests the setRequest() method.
     *
     * @return void
     */
    public function testSetRequest() {

        // Set a Breaches request mock.
        $request = new BreachRequest();

        $obj = new BreachEvent();

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

        $obj = new BreachEvent();

        $obj->setResponse($response);
        $this->assertSame($response, $obj->getResponse());
    }
}
