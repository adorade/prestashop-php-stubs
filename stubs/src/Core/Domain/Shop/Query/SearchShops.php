<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\Query;

/**
 * Query responsible for getting shops for a given search term
 */
class SearchShops
{
    /**
     * SearchShops constructor.
     *
     * @param string $searchTerm
     */
    public function __construct(string $searchTerm)
    {
    }
    /**
     * @return string
     */
    public function getSearchTerm(): string
    {
    }
}
