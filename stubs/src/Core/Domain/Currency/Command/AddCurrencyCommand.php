<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Command;

/**
 * Class AddCurrencyCommand used to add an official currency
 */
class AddCurrencyCommand
{
    /**
     * @var AlphaIsoCode
     */
    protected $isoCode;
    /**
     * @var ExchangeRate
     */
    protected $exchangeRate;
    /**
     * @var Precision|null
     */
    protected $precision;
    /**
     * @var string[]
     */
    protected $localizedNames = [];
    /**
     * @var string[]
     */
    protected $localizedSymbols = [];
    /**
     * @var bool
     */
    protected $isEnabled;
    /**
     * @var int[]
     */
    protected $shopIds = [];
    /**
     * @var string[]
     */
    protected $localizedTransformations = [];
    /**
     * @param string $isoCode
     * @param float $exchangeRate
     * @param bool $isEnabled
     *
     * @throws CurrencyConstraintException
     */
    public function __construct($isoCode, $exchangeRate, $isEnabled)
    {
    }
    /**
     * @return AlphaIsoCode
     */
    public function getIsoCode()
    {
    }
    /**
     * @return Precision|null
     */
    public function getPrecision(): ?\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\Precision
    {
    }
    /**
     * @param int|string $precision
     *
     * @return self
     *
     * @throws CurrencyConstraintException
     */
    public function setPrecision($precision): \PrestaShop\PrestaShop\Core\Domain\Currency\Command\AddCurrencyCommand
    {
    }
    /**
     * @return ExchangeRate
     */
    public function getExchangeRate()
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames(): array
    {
    }
    /**
     * @param string[] $localizedNames currency's localized names, indexed by language id
     *
     * @return $this
     *
     * @throws CurrencyConstraintException
     */
    public function setLocalizedNames(array $localizedNames): \PrestaShop\PrestaShop\Core\Domain\Currency\Command\AddCurrencyCommand
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedSymbols(): array
    {
    }
    /**
     * @param string[] $localizedSymbols currency's localized symbols, indexed by language id
     *
     * @return $this
     *
     * @throws CurrencyConstraintException
     */
    public function setLocalizedSymbols(array $localizedSymbols): \PrestaShop\PrestaShop\Core\Domain\Currency\Command\AddCurrencyCommand
    {
    }
    /**
     * @return bool
     */
    public function isEnabled()
    {
    }
    /**
     * @return int[]
     */
    public function getShopIds()
    {
    }
    /**
     * @param int[] $shopIds
     *
     * @return self
     */
    public function setShopIds(array $shopIds)
    {
    }
    /**
     * Returns the currency's localized transformations, indexed by language id
     *
     * @return string[]
     */
    public function getLocalizedTransformations(): array
    {
    }
    /**
     * @param string[] $localizedTransformations currency's localized transformations, indexed by language id
     *
     * @return $this
     */
    public function setLocalizedTransformations(array $localizedTransformations): \PrestaShop\PrestaShop\Core\Domain\Currency\Command\AddCurrencyCommand
    {
    }
}
