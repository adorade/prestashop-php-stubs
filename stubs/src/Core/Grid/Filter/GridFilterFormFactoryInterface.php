<?php

namespace PrestaShop\PrestaShop\Core\Grid\Filter;

/**
 * Interface FilterFormFactoryInterface.
 */
interface GridFilterFormFactoryInterface
{
    /**
     * Create filters form for grid definition.
     *
     * @param GridDefinitionInterface $definition
     *
     * @return FormInterface
     */
    public function create(\PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinitionInterface $definition);
}
