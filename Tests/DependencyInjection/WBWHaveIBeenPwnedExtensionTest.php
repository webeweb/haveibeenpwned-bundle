<?php

/*
 * This file is part of the haveibeenpwned-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HaveIBeenPwnedBundle\Tests\DependencyInjection;

use Exception;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
use WBW\Bundle\HaveIBeenPwnedBundle\DependencyInjection\Configuration;
use WBW\Bundle\HaveIBeenPwnedBundle\DependencyInjection\WBWHaveIBeenPwnedExtension;
use WBW\Bundle\HaveIBeenPwnedBundle\EventListener\HaveIBeenPwnedEventListener;
use WBW\Bundle\HaveIBeenPwnedBundle\Tests\AbstractTestCase;

/**
 * HaveIBeenPwned extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\Tests\DependencyInjection
 */
class WBWHaveIBeenPwnedExtensionTest extends AbstractTestCase {

    /**
     * Configs.
     *
     * @var array
     */
    private $configs;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a configs array mock.
        $this->configs = [
            WBWHaveIBeenPwnedExtension::EXTENSION_ALIAS => [
                "event_listeners" => true,
            ],
        ];
    }

    /**
     * Tests the getAlias() method.
     *
     * @return void
     */
    public function testGetAlias(): void {

        $obj = new WBWHaveIBeenPwnedExtension();

        $this->assertEquals(WBWHaveIBeenPwnedExtension::EXTENSION_ALIAS, $obj->getAlias());
    }

    /**
     * Tests the getConfiguration() method.
     *
     * @return void
     */
    public function testGetConfiguration(): void {

        $obj = new WBWHaveIBeenPwnedExtension();

        $this->assertInstanceOf(Configuration::class, $obj->getConfiguration([], $this->containerBuilder));
    }

    /**
     * Tests the load() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testLoad(): void {

        $obj = new WBWHaveIBeenPwnedExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        // Event listeners
        $this->assertInstanceOf(HaveIBeenPwnedEventListener::class, $this->containerBuilder->get(HaveIBeenPwnedEventListener::SERVICE_NAME));
    }

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoadWithoutEventListeners(): void {

        // Set the configs mock.
        $this->configs[WBWHaveIBeenPwnedExtension::EXTENSION_ALIAS]["event_listeners"] = false;

        $obj = new WBWHaveIBeenPwnedExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        try {

            $this->containerBuilder->get(HaveIBeenPwnedEventListener::SERVICE_NAME);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ServiceNotFoundException::class, $ex);
            $this->assertContains(HaveIBeenPwnedEventListener::SERVICE_NAME, $ex->getMessage());
        }
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw_haveibeenpwned", WBWHaveIBeenPwnedExtension::EXTENSION_ALIAS);
    }
}
