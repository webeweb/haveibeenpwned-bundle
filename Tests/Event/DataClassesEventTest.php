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
use WBW\Bundle\HaveIBeenPwnedBundle\Event\HaveIBeenPwnedEvents;
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
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DataClassesEvent();

        $this->assertEquals(HaveIBeenPwnedEvents::DATA_CLASSES, $obj->getEventName());

        $this->assertNull($obj->getRequest());
        $this->assertNull($obj->getResponse());
    }

    /**
     * Tests the setRequest() method.
     *
     * @return void
     */
    public function testSetRequest() {

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
    public function testSetResponse() {

        // Set a Data classes response mock.
        $response = new DataClassesResponse();

        $obj = new DataClassesEvent();

        $obj->setResponse($response);
        $this->assertSame($response, $obj->getResponse());
    }
}
