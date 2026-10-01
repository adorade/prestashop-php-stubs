<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query\Filter;

/**
 * Stores filters to be applied on SQL query
 */
final class SqlFilters
{
    public const WHERE_STRICT = 1;
    public const WHERE_LIKE = 2;
    public const HAVING_LIKE = 3;
    public const WHERE_DATE = 4;
    public const MIN_MAX = 5;
    /**
     * @param string $filterName
     * @param string $sqlField
     * @param int $comparison
     *
     * @return self
     */
    public function addFilter($filterName, $sqlField, $comparison = self::WHERE_STRICT): self
    {
    }
    /**
     * @return array
     */
    public function getFilters(): array
    {
    }
}
