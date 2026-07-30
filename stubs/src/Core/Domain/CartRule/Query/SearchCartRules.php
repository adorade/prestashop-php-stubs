<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\Query;

/**
 * Searches for cart rules
 */
class SearchCartRules
{
    /**
     * @param string $searchPhrase
     */
    public function __construct(string $searchPhrase)
    {
    }
    /**
     * @return string
     */
    public function getSearchPhrase(): string
    {
    }
}
