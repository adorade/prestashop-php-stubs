<?php

namespace PrestaShop\PrestaShop\Core\Search\Filters;

class RequestSqlFilters extends \PrestaShop\PrestaShop\Core\Search\Filters
{
    /** @var string */
    protected $filterId = \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\RequestSqlGridDefinitionFactory::GRID_ID;
    /**
     * {@inheritdoc}
     */
    public static function getDefaults()
    {
    }
}
