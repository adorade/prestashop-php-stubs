<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Exception;

/**
 * Is thrown on failure to delete country
 */
class DeleteCountryException extends \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryException
{
    /**
     * When fails to delete single country
     */
    public const FAILED_DELETE = 1;
    /**
     * When fails to delete countries in bulk actions
     */
    public const FAILED_BULK_DELETE = 2;
}
