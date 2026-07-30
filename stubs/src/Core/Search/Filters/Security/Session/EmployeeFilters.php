<?php

namespace PrestaShop\PrestaShop\Core\Search\Filters\Security\Session;

/**
 * Class EmployeeFilters is responsible for providing default filter values for Employees sessions grid.
 */
class EmployeeFilters extends \PrestaShop\PrestaShop\Core\Search\Filters
{
    /**
     * {@inheritdoc}
     */
    protected $filterId = \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\Security\Session\EmployeeGridDefinitionFactory::GRID_ID;
    /**
     * {@inheritdoc}
     */
    public static function getDefaults(): array
    {
    }
}
