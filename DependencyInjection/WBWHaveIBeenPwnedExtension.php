<?php

/*
 * This file is part of the haveibeenpwned-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HaveIBeenPwnedBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * HaveIBeenPwned extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\DependencyInjection
 */
class WBWHaveIBeenPwnedExtension extends Extension {

    /**
     * Extension alias.
     *
     * @var string
     */
    const EXTENSION_ALIAS = "wbw_haveibeenpwned";

    /**
     * {@inheritdoc}
     */
    public function getAlias(): string {
        return self::EXTENSION_ALIAS;
    }

    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container): void {

        $fileLocator = new FileLocator(__DIR__ . "/../Resources/config");

        $serviceLoader = new YamlFileLoader($container, $fileLocator);
        $serviceLoader->load("services.yml");

        /** @var ConfigurationInterface $configuration */
        $configuration = $this->getConfiguration($configs, $container);

        $config = $this->processConfiguration($configuration, $configs);

        if (true === $config["event_listeners"]) {
            $serviceLoader->load("event_listeners.yml");
        }
    }
}
