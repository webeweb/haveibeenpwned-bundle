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

use WBW\Bundle\HaveIBeenPwnedBundle\Tests\AbstractTestCase;
use WBW\Bundle\HaveIBeenPwnedBundle\Tests\Fixtures\Event\TestEvent;
use WBW\Library\HaveIBeenPwned\Entity\HaveIBeenPwnedEntityInterface;
use WBW\Library\HaveIBeenPwned\Model\AbstractRequest;
use WBW\Library\HaveIBeenPwned\Model\AbstractResponse;

/**
 * Abstract event test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Tests\Event
 */
class AbstractEventTest extends AbstractTestCase {

    /**
     * Entity.
     *
     * @var HaveIBeenPwnedEntityInterface
     */
    private $entity;

    /**
     * {inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a HaveIBeenPwned entity mock.
        $this->entity = $this->getMockBuilder(HaveIBeenPwnedEntityInterface::class)->getMock();
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestEvent("eventName", $this->entity);

        $this->assertEquals("eventName", $obj->getEventName());
        $this->assertSame($this->entity, $obj->getEntity());
        $this->assertNull($obj->getRequest());
        $this->assertNull($obj->getResponse());
    }

    /**
     * Tests the setRequest() method.
     *
     * @return void
     */
    public function testSetRequest() {

        // Set a Request mock.
        $request = $this->getMockBuilder(AbstractRequest::class)->getMock();

        $obj = new TestEvent("eventName", $this->entity);

        $obj->setRequest($request);
        $this->assertSame($request, $obj->getRequest());
    }

    /**
     * Tests the setResponse() method.
     *
     * @return void
     */
    public function testSetResponse() {

        // Set a Response mock.
        $response = $this->getMockBuilder(AbstractResponse::class)->getMock();

        $obj = new TestEvent("eventName", $this->entity);

        $obj->setResponse($response);
        $this->assertSame($response, $obj->getResponse());
    }
}
