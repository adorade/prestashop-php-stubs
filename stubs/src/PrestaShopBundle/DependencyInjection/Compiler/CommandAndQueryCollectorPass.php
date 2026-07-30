<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * Collects all Commands & Queries and puts them into container for later processing.
 */
class CommandAndQueryCollectorPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
