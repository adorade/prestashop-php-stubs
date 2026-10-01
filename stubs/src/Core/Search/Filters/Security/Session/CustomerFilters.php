<?php

namespace PrestaShop\PrestaShop\Core\Search\Filters\Security\Session;

/**
 * Class CustomerFilters is responsible for providing default filter values for Customer sessions grid.
 */
class CustomerFilters extends \PrestaShop\PrestaShop\Core\Search\Filters
{
    /**
     * {@inheritdoc}
     */
    protected $filterId = \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\Security\Session\CustomerGridDefinitionFactory::GRID_ID;
    /**
     * {@inheritdoc}
     */
    public static function getDefaults(): array
    {
    }
}
