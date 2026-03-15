<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\QueryResult;

/**
 * Stores data about address fields which are required by country
 */
class CountryRequiredFields
{
    /**
     * @param bool $stateRequired
     * @param bool $dniRequired
     */
    public function __construct(bool $stateRequired, bool $dniRequired)
    {
    }
    /**
     * @return bool
     */
    public function isStateRequired(): bool
    {
    }
    /**
     * @return bool
     */
    public function isDniRequired(): bool
    {
    }
}
