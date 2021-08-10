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

use WBW\Bundle\HaveIBeenPwnedBundle\Event\DataClassesEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\Tests\AbstractTestCase;
use WBW\Library\HaveIBeenPwned\Model\Request\DataClassesRequest;
use WBW\Library\HaveIBeenPwned\Model\Response\DataClassesResponse;

/**
 * Data classes event test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Tests\Event
 */
class DataClassesEventTest extends AbstractTestCase {

    /**
     * Tests the setRequest() method.
     *
     * @return void
     */
    public function testSetRequest(): void {

        // Set a Data classes request mock.
        $request = new DataClassesRequest();

        $obj = new DataClassesEvent();

        $obj->setRequest($request);
        $this->assertSame($request, $obj->getRequest());
    }

    /**
     * Tests the setResponse() method.
     *
     * @return void
     */
    public function testSetResponse(): void {

        // Set a Data classes response mock.
        $response = new DataClassesResponse();

        $obj = new DataClassesEvent();

        $obj->setResponse($response);
        $this->assertSame($response, $obj->getResponse());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.haveibeenpwned.event.data_classes", DataClassesEvent::EVENT_NAME);

        $obj = new DataClassesEvent();

        $this->assertEquals(DataClassesEvent::EVENT_NAME, $obj->getEventName());

        $this->assertNull($obj->getRequest());
        $this->assertNull($obj->getResponse());
    }
}
