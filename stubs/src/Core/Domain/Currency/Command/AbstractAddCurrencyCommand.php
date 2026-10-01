<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Command;

abstract class AbstractAddCurrencyCommand
{
    protected \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\AlphaIsoCode $isoCode;
    protected \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\ExchangeRate $exchangeRate;
    protected ?\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\Precision $precision = null;
    /**
     * @var string[]
     */
    protected array $localizedNames = [];
    /**
     * @var string[]
     */
    protected array $localizedSymbols = [];
    protected bool $isEnabled;
    /**
     * @var int[]
     */
    protected array $shopIds = [];
    /**
     * @var string[]
     */
    protected array $localizedTransformations = [];
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyConstraintException
     */
    public function __construct(string $isoCode, float $exchangeRate, bool $isEnabled)
    {
    }
    public function getIsoCode(): \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\AlphaIsoCode
    {
    }
    public function getPrecision(): ?\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\Precision
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyConstraintException
     */
    public function setPrecision(int|string $precision): self
    {
    }
    public function getExchangeRate(): \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\ExchangeRate
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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyConstraintException
     */
    public function setLocalizedNames(array $localizedNames): self
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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyConstraintException
     */
    public function setLocalizedSymbols(array $localizedSymbols): self
    {
    }
    public function isEnabled(): bool
    {
    }
    /**
     * @return int[]
     */
    public function getShopIds(): array
    {
    }
    /**
     * @param int[] $shopIds
     */
    public function setShopIds(array $shopIds): self
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
     */
    public function setLocalizedTransformations(array $localizedTransformations): self
    {
    }
}
