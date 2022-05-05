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

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use WBW\Bundle\CoreBundle\Config\ConfigurationHelper;

/**
 * Configuration.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\HaveIBeenPwnedBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface {

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder {

        $treeBuilder = new TreeBuilder(WBWHaveIBeenPwnedExtension::EXTENSION_ALIAS);

        $rootNode = ConfigurationHelper::getRootNode($treeBuilder, WBWHaveIBeenPwnedExtension::EXTENSION_ALIAS);
        $rootNode->children()
            ->booleanNode("event_listeners")->defaultTrue()->info("Load event listeners")->end()
            ->end();

        return $treeBuilder;
    }
}
