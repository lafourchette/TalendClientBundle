<?php

namespace TalendClientBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Guzzle\Log\MessageFormatter;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('la_fourchette_talend_client');

        $rootNode
            ->children()
                ->scalarNode('base_url')->isRequired()->end()
                ->scalarNode('login')->isRequired()->end()
                ->scalarNode('password')->isRequired()->end()
                ->scalarNode('logs_format')->defaultValue(MessageFormatter::DEBUG_FORMAT)->end()
            ->end();

        return $treeBuilder;
    }
}
