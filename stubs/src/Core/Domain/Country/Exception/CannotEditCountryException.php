<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Exception;

/**
 * Is thrown when adding new country fails
 */
class CannotEditCountryException extends \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryException
{
    public const FAILED_TO_UPDATE_COUNTRY = 10;
    public const UNKNOWN_EXCEPTION = 20;
}
