<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Query;

/**
 * Get reference currency data, which are data from the unicode CLDR database, thus
 * only official currencies have one. The result is exposed with a ReferenceCurrency
 * object, and if the currency doesn't exist a CurrencyNotFoundException is thrown.
 */
class GetReferenceCurrency
{
    /**
     * @param string $isoCode
     *
     * @throws CurrencyException
     */
    public function __construct(string $isoCode)
    {
    }
    /**
     * @return AlphaIsoCode
     */
    public function getIsoCode(): \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\AlphaIsoCode
    {
    }
}
