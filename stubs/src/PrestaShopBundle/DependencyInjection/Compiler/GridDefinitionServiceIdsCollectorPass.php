<?php

namespace PrestaShopBundle\DependencyInjection\Compiler;

/**
 * Collects grid definition service ids.
 */
final class GridDefinitionServiceIdsCollectorPass implements \Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    public const GRID_DEFINITION_SERVICE_PREFIX = 'prestashop.core.grid.definition';
    /**
     * {@inheritdoc}
     */
    public function process(\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
    }
}
