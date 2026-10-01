<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * Aggregates and organizes all Commands & Queries and storing them in a container for future processing
 */
class CommandAndQueryCollectorPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container): void
    {
    }
}
