<?php

namespace PrestaShop\PrestaShop\Core\Search\Filters;

class StoreFilters extends \PrestaShop\PrestaShop\Core\Search\ShopFilters
{
    /** @var string */
    protected $filterId = \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\StoreGridDefinitionFactory::GRID_ID;
    /**
     * @return array<string, mixed>
     */
    public static function getDefaults(): array
    {
    }
}
