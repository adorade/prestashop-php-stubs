<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * This interface allows to identify the filters associated to a Grid, which is then used
 * to scope its parameters in request (thus allowing multi grid on same page) and as a key
 * to persist them in database (and of course etch them afterwards).
 */
interface FilterableGridDefinitionFactoryInterface extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface
{
    /**
     * Returns a (unique) id to identify the grid filters, this is used as a key to persist
     * (and clear) the Filters associated to the grid.
     *
     * @return string
     */
    public function getFilterId(): string;
}
