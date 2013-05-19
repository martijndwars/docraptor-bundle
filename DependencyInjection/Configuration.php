<?php

namespace Bytes\Bundle\DocraptorBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('bytes_docraptor');

        $rootNode
            ->children()
                ->scalarNode('apikey')
                    ->info('Your Docraptor API key')
                    ->isRequired()
                ->end()
                ->booleanNode('testmode')
                    ->info('Test mode documents do not count against your monthly document quota')
                    ->defaultTrue()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
