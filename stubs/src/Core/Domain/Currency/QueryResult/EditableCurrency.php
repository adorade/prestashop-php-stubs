<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\QueryResult;

/**
 * Class EditableCurrency
 */
class EditableCurrency
{
    /**
     * @param int $currencyId
     * @param string $isoCode
     * @param array $names
     * @param array $symbols
     * @param array $transformations
     * @param float $exchangeRate
     * @param int $precision
     * @param bool $isEnabled
     * @param bool $isUnofficial
     * @param int[] $associatedShopIds
     *
     * @throws CurrencyException
     */
    public function __construct($currencyId, $isoCode, array $names, array $symbols, array $transformations, $exchangeRate, int $precision, $isEnabled, bool $isUnofficial, array $associatedShopIds)
    {
    }
    /**
     * @return CurrencyId
     */
    public function getCurrencyId()
    {
    }
    /**
     * Currency ISO code
     *
     * @return string
     */
    public function getIsoCode()
    {
    }
    /**
     * Currency's names, indexed by language id.
     *
     * @return array
     */
    public function getNames(): array
    {
    }
    /**
     * Currency's names, indexed by language id.
     *
     * @return array
     */
    public function getSymbols(): array
    {
    }
    /**
     * Currency's transformations, indexed by language id.
     *
     * @return array
     */
    public function getTransformations(): array
    {
    }
    /**
     * Exchange rate of the currency compared to the shop's default one
     *
     * @return float
     */
    public function getExchangeRate()
    {
    }
    /**
     * Currency decimal precision
     *
     * @return int
     */
    public function getPrecision(): int
    {
    }
    /**
     * Whether the currency is enabled on the front
     *
     * @return bool
     */
    public function isEnabled()
    {
    }
    /**
     * Whether the currency is an unofficial one (custom created)
     *
     * @return bool
     */
    public function isUnofficial(): bool
    {
    }
    /**
     * List of shops that use this currency (shop IDs)
     *
     * @return int[]
     */
    public function getAssociatedShopIds()
    {
    }
}
