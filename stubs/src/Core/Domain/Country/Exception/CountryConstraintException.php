<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Exception;

/**
 * Is thrown when country constraint is violated
 */
class CountryConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryException
{
    public const INVALID_ID = 1;
    public const INVALID_ZIP_CODE = 2;
}
