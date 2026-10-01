<?php

namespace PrestaShop\PrestaShop\Core\Search\Filters;

/**
 * Default filters for the extra property definition grid.
 *
 * Extends ShopFilters so the grid receives the shop context's ShopConstraint (injected
 * by ClassFiltersBuilder): the query builder uses it to only list definitions available
 * for the current shop scope.
 */
final class ExtraPropertyDefinitionFilters extends \PrestaShop\PrestaShop\Core\Search\ShopFilters
{
    /**
     * {@inheritdoc}
     */
    public static function getDefaults(): array
    {
    }
}
