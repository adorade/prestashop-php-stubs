<?php

namespace PrestaShop\PrestaShop\Core\Search\Filters;

/**
 * Default states list filters
 */
class StateFilters extends \PrestaShop\PrestaShop\Core\Search\Filters
{
    /**
     * @var string
     */
    protected $filterId = \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\StateGridDefinitionFactory::GRID_ID;
    /**
     * {@inheritdoc}
     */
    public static function getDefaults(): array
    {
    }
}
