<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * This grid definition is based on the product list one, it is used to display the details of each shop
 * for a specific product, by extending the initial definition we keep the same column and actions in every details.
 */
class ProductShopsGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\ProductGridDefinitionFactory
{
    /**
     * We change the columns a little to adapt to the shop preview, mostly change shop list to shop name and
     * remove bulk action.
     *
     * {@inheritDoc}
     */
    protected function getColumns()
    {
    }
    /**
     * Adapt the action which target multiple shop on the initial row, they here have to be shop specific.
     *
     * @return RowActionCollection
     */
    protected function getRowActions(): \PrestaShop\PrestaShop\Core\Grid\Action\Row\RowActionCollection
    {
    }
    /**
     * Edit attributes are only used to handle the shop selection modal, not needed in a shop row.
     *
     * @return array
     */
    protected function getMultiShopEditionAttributes(): array
    {
    }
    /**
     * We don't perform any filtering on the shop, so no need to define them.
     *
     * {@inheritDoc}
     */
    protected function getFilters()
    {
    }
}
