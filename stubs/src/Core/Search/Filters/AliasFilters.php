<?php

namespace PrestaShop\PrestaShop\Core\Search\Filters;

/**
 * Default search alias list filters
 */
class AliasFilters extends \PrestaShop\PrestaShop\Core\Search\Filters
{
    /**
     * @var string
     */
    protected $filterId = \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AliasGridDefinitionFactory::GRID_ID;
    /**
     * {@inheritdoc}
     */
    public static function getDefaults(): array
    {
    }
}
