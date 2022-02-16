<?php

/*
 * This file is part of the haveibeenpwned-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HaveIBeenPwnedBundle\Tests\EventListener;

use Exception;
use WBW\Bundle\HaveIBeenPwnedBundle\Event\BreachedAccountEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\Event\BreachesEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\Event\BreachEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\Event\DataClassesEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\Event\PasteAccountEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\Event\RangeEvent;
use WBW\Bundle\HaveIBeenPwnedBundle\EventListener\HaveIBeenPwnedEventListener;
use WBW\Bundle\HaveIBeenPwnedBundle\Tests\AbstractTestCase;
use WBW\Library\HaveIBeenPwned\Api\RequestInterface;
use WBW\Library\HaveIBeenPwned\Request\BreachedAccountRequest;
use WBW\Library\HaveIBeenPwned\Request\BreachesRequest;
use WBW\Library\HaveIBeenPwned\Request\BreachRequest;
use WBW\Library\HaveIBeenPwned\Request\DataClassesRequest;
use WBW\Library\HaveIBeenPwned\Request\PasteAccountRequest;
use WBW\Library\HaveIBeenPwned\Request\RangeRequest;
use WBW\Library\HaveIBeenPwned\Response\BreachesResponse;
use WBW\Library\HaveIBeenPwned\Response\DataClassesResponse;
use WBW\Library\HaveIBeenPwned\Response\PastesResponse;
use WBW\Library\HaveIBeenPwned\Response\RangesResponse;
use WBW\Library\Provider\Exception\ApiException;

/**
 * HaveIBeenPwned event listener test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Tests\EventListener
 */
class HaveIBeenPwnedEventListenerTest extends AbstractTestCase {

    /**
     * {inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        $this->wait();
    }

    /**
     * Tests onBreach()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testOnBreach(): void {

        // Set a Breach event mock.
        $breachEvent = new BreachEvent($this->breach);

        $obj = new HaveIBeenPwnedEventListener($this->logger);

        $res = $obj->onBreach($breachEvent);
        $this->assertSame($breachEvent, $res);

        $this->assertInstanceOf(BreachRequest::class, $res->getRequest());
        $this->assertInstanceOf(BreachesResponse::class, $res->getResponse());
    }

    /**
     * Tests onBreachedAccount()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testOnBreachedAccount(): void {

        // Set a Breached account event mock.
        $breachEvent = new BreachedAccountEvent($this->breachedAccount);

        $obj = new HaveIBeenPwnedEventListener($this->logger);

        try {

            // This unit test failed on Travis-CI.
            $res = $obj->onBreachedAccount($breachEvent);
            $this->assertSame($breachEvent, $res);

            $this->assertInstanceOf(BreachedAccountRequest::class, $res->getRequest());
            $this->assertInstanceOf(BreachesResponse::class, $res->getResponse());
        } catch (Exception $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
        }
    }

    /**
     * Tests onBreaches()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testOnBreaches(): void {

        // Set a Breaches event mock.
        $breachesEvent = new BreachesEvent($this->breaches);

        $obj = new HaveIBeenPwnedEventListener($this->logger);

        $res = $obj->onBreaches($breachesEvent);
        $this->assertSame($breachesEvent, $res);

        $this->assertInstanceOf(BreachesRequest::class, $res->getRequest());
        $this->assertInstanceOf(BreachesResponse::class, $res->getResponse());
    }

    /**
     * Tests onDataClasses()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testOnDataClasses(): void {

        // Set a Data classes event mock.
        $dataClassesEvent = new DataClassesEvent();

        $obj = new HaveIBeenPwnedEventListener($this->logger);

        $res = $obj->onDataClasses($dataClassesEvent);
        $this->assertSame($dataClassesEvent, $res);

        $this->assertInstanceOf(DataClassesRequest::class, $res->getRequest());
        $this->assertInstanceOf(DataClassesResponse::class, $res->getResponse());
    }

    /**
     * Tests onPasteAccount()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testOnPasteAccount(): void {

        // Set a Paste account event mock.
        $breachEvent = new PasteAccountEvent($this->pasteAccount);

        $obj = new HaveIBeenPwnedEventListener($this->logger);

        try {

            $res = $obj->onPasteAccount($breachEvent);
            $this->assertSame($breachEvent, $res);
            $this->assertInstanceOf(PasteAccountRequest::class, $res->getRequest());
            $this->assertInstanceOf(PastesResponse::class, $res->getResponse());
        } catch (Exception $ex) {

            $this->assertInstanceOf(ApiException::class, $ex);
            $this->assertEquals(401, $ex->getPrevious()->getCode());
        }
    }

    /**
     * Tests onRange()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testOnRange(): void {

        // Set a Range event mock.
        $rangeEvent = new RangeEvent($this->range);

        $obj = new HaveIBeenPwnedEventListener($this->logger);

        $res = $obj->onRange($rangeEvent);
        $this->assertSame($rangeEvent, $res);

        $this->assertInstanceOf(RangeRequest::class, $res->getRequest());
        $this->assertInstanceOf(RangesResponse::class, $res->getResponse());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.haveibeenpwned.event_listener", HaveIBeenPwnedEventListener::SERVICE_NAME);

        $obj = new HaveIBeenPwnedEventListener($this->logger);

        $this->assertNotNull($obj->getApiProvider());
        $this->assertSame($this->logger, $obj->getLogger());
    }

    /**
     * Wait.
     *
     * @return void
     */
    protected function wait() {
        sleep(intval(RequestInterface::RATE_LIMITING * 4 / 1000));
    }
}
