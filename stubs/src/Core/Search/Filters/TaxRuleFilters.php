<?php

namespace PrestaShop\PrestaShop\Core\Search\Filters;

/**
 * Provides default filters for tax rule grid.
 */
class TaxRuleFilters extends \PrestaShop\PrestaShop\Core\Search\Filters
{
    /**
     * @var string
     */
    protected $filterId = \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\TaxRuleGridDefinitionFactory::GRID_ID;
    /**
     * {@inheritdoc}
     */
    public static function getDefaults()
    {
    }
}
