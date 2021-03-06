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

use WBW\Bundle\HaveIBeenPwnedBundle\Event\RangeEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\Tests\AbstractTestCase;
use WBW\Bundle\HaveIBeenPwnedBundle\WBWHaveIBeenPwnedEvents;
use WBW\Library\HaveIBeenPwned\Model\Request\RangeRequest;
use WBW\Library\HaveIBeenPwned\Model\Response\RangesResponse;

/**
 * Range event test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Tests\Event
 */
class RangeEventTest extends AbstractTestCase {

    /**
     * Tests the setRequest() method.
     *
     * @return void
     */
    public function testSetRequest(): void {

        // Set a Range request mock.
        $request = new RangeRequest();

        $obj = new RangeEvent($this->range);

        $obj->setRequest($request);
        $this->assertSame($request, $obj->getRequest());
    }

    /**
     * Tests the setResponse() method.
     *
     * @return void
     */
    public function testSetResponse(): void {

        // Set a Range response mock.
        $response = new RangesResponse();

        $obj = new RangeEvent($this->range);

        $obj->setResponse($response);
        $this->assertSame($response, $obj->getResponse());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RangeEvent($this->range);

        $this->assertEquals(WBWHaveIBeenPwnedEvents::RANGE, $obj->getEventName());

        $this->assertNull($obj->getRequest());
        $this->assertNull($obj->getResponse());

        $this->assertSame($this->range, $obj->getRange());
    }
}
