<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Command;

/**
 * Class EditCurrencyCommand
 */
class EditCurrencyCommand
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId
     */
    protected $currencyId;
    /**
     * @var \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\ExchangeRate|null
     */
    protected $exchangeRate;
    /**
     * @var \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\Precision|null
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
     * @param int $currencyId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyException
     */
    public function __construct($currencyId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId
     */
    public function getCurrencyId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\ExchangeRate|null
     */
    public function getExchangeRate()
    {
    }
    /**
     * @param float $exchangeRate
     *
     * @return self
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyConstraintException
     */
    public function setExchangeRate($exchangeRate)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\Precision|null
     */
    public function getPrecision(): ?\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\Precision
    {
    }
    /**
     * @param int|string $precision
     *
     * @return self
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyConstraintException
     */
    public function setPrecision($precision): \PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditCurrencyCommand
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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyConstraintException
     */
    public function setLocalizedNames(array $localizedNames): \PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditCurrencyCommand
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedSymbols()
    {
    }
    /**
     * @param string[] $localizedSymbols currency's localized symbols, indexed by language id
     *
     * @return $this
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyConstraintException
     */
    public function setLocalizedSymbols(array $localizedSymbols): \PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditCurrencyCommand
    {
    }
    /**
     * @return bool
     */
    public function isEnabled()
    {
    }
    /**
     * @param bool $isEnabled
     *
     * @return self
     */
    public function setIsEnabled($isEnabled)
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
    public function setLocalizedTransformations(array $localizedTransformations): \PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditCurrencyCommand
    {
    }
}
