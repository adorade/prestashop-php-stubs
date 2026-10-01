<?php

namespace PrestaShop\PrestaShop\Core\Search\Filters;

/**
 * Default Countries list filters
 */
class CountryFilters extends \PrestaShop\PrestaShop\Core\Search\Filters
{
    /**
     * @var string
     */
    protected $filterId = \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\CountryGridDefinitionFactory::GRID_ID;
    /**
     * {@inheritdoc}
     */
    public static function getDefaults(): array
    {
    }
}
