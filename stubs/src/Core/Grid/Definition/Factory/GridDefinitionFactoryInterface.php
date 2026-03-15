<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Interface GridDefinitionFactoryInterface defines contract for creating grid.
 */
interface GridDefinitionFactoryInterface
{
    /**
     * Create new grid definition.
     *
     * @return GridDefinitionInterface
     */
    public function getDefinition();
}
