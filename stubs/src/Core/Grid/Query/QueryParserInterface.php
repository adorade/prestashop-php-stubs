<?php

namespace PrestaShop\PrestaShop\Core\Grid\Query;

/**
 * Returns the executable query from a prepared one.
 */
interface QueryParserInterface
{
    /**
     * @param string $query the prepared query
     * @param array $queryParameters the query parameters
     *
     * @return string
     */
    public function parse($query, array $queryParameters);
}
