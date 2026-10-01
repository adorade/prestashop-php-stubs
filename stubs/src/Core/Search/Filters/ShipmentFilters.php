<?php

namespace PrestaShop\PrestaShop\Core\Search\Filters;

class ShipmentFilters extends \PrestaShop\PrestaShop\Core\Search\Filters
{
    /** @var string */
    protected $filterId = \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\ShipmentGridDefinitionFactory::GRID_ID;
    /**
     * @return array<string, mixed>
     */
    public static function getDefaults(): array
    {
    }
}
