<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Query;

/**
 * Retrieves the exchange rate for a currency compared to the shop's default
 */
class GetCurrencyExchangeRate
{
    /**
     * @param string $isoCode Currency ISO code
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyException
     */
    public function __construct(string $isoCode)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\AlphaIsoCode
     */
    public function getIsoCode(): \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\AlphaIsoCode
    {
    }
}
