<?php

namespace PrestaShop\PrestaShop\Core\Search\Filters;

/**
 * Default Cart list filters
 */
class CartFilter extends \PrestaShop\PrestaShop\Core\Search\ShopFilters
{
    /**
     * @var string
     */
    protected $filterId = \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\CartGridDefinitionFactory::GRID_ID;
    /**
     * {@inheritdoc}
     */
    public static function getDefaults(): array
    {
    }
}
