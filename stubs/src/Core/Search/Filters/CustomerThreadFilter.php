<?php

namespace PrestaShop\PrestaShop\Core\Search\Filters;

/**
 * Default Customer thread list filters
 */
class CustomerThreadFilter extends \PrestaShop\PrestaShop\Core\Search\Filters
{
    /**
     * @var string
     */
    protected $filterId = \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\CustomerThreadGridDefinitionFactory::GRID_ID;
    /**
     * {@inheritdoc}
     */
    public static function getDefaults(): array
    {
    }
}
