<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\ValueObject;

/**
 * Provides country id value
 */
class NoCountryId implements \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryIdInterface
{
    /**
     * @var int
     */
    public const NO_COUNTRY_ID_VALUE = 0;
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
