<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class AbstractFilterableGridDefinitionFactory implements filterable grid definition creation.
 */
abstract class AbstractFilterableGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory implements \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\FilterableGridDefinitionFactoryInterface
{
    /**
     * {@inheritdoc}
     *
     * Grid definition already has an internal id used or hooks, that can also be used as an identifier for filters
     */
    public function getFilterId(): string
    {
    }
}
