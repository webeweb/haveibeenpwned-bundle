<?php

/*
 * This file is part of the haveibeenpwned-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HaveIBeenPwnedBundle\Tests;

use WBW\Bundle\CoreBundle\Tests\AbstractTestCase as TestCase;
use WBW\Library\HaveIBeenPwned\Entity\BreachedAccountInterface;
use WBW\Library\HaveIBeenPwned\Entity\BreachesInterface;
use WBW\Library\HaveIBeenPwned\Entity\BreachInterface;
use WBW\Library\HaveIBeenPwned\Entity\PasteAccountInterface;
use WBW\Library\HaveIBeenPwned\Entity\RangeInterface;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Tests
 * @abstract
 */
abstract class AbstractTestCase extends TestCase {

    /**
     * Breach.
     *
     * @var BreachInterface
     */
    protected $breach;

    /**
     * Breached account.
     *
     * @var BreachedAccountInterface
     */
    protected $breachedAccount;

    /**
     * Breaches.
     *
     * @var BreachesInterface
     */
    protected $breaches;

    /**
     * Paste.
     *
     * @var PasteAccountInterface
     */
    protected $pasteAccount;

    /**
     * Range.
     *
     * @var RangeInterface
     */
    protected $range;

    /**
     * {inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Breach mock.
        $this->breach = $this->getMockBuilder(BreachInterface::class)->getMock();
        $this->breach->expects($this->any())->method("getHaveIBeenPwnedName")->willReturn("Adobe");

        // Set a Breached account mock.
        $this->breachedAccount = $this->getMockBuilder(BreachedAccountInterface::class)->getMock();
        $this->breachedAccount->expects($this->any())->method("getHaveIBeenPwnedAccount")->willReturn("john.doe@gmail.com");
        $this->breachedAccount->expects($this->any())->method("getHaveIBeenPwnedDomain")->willReturn("adobe.com");
        $this->breachedAccount->expects($this->any())->method("getHaveIBeenPwnedIncludeUnverified")->willReturn(true);
        $this->breachedAccount->expects($this->any())->method("getHaveIBeenPwnedTruncateResponse")->willReturn(false);

        // Set a Breaches mock.
        $this->breaches = $this->getMockBuilder(BreachesInterface::class)->getMock();
        $this->breaches->expects($this->any())->method("getHaveIBeenPwnedDomain")->willReturn("adobe.com");

        // Set a Paste account mock.
        $this->pasteAccount = $this->getMockBuilder(PasteAccountInterface::class)->getMock();
        $this->pasteAccount->expects($this->any())->method("getHaveIBeenPwnedAccount")->willReturn("john.doe@gmail.com");

        // Set a Range mock.
        $this->range = $this->getMockBuilder(RangeInterface::class)->getMock();
        $this->range->expects($this->any())->method("getHaveIBeenPwnedHash")->willReturn("21BD1");
    }
}
