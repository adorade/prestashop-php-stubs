<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Command;

abstract class AbstractEditCurrencyCommand
{
    protected \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId;
    protected ?\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\ExchangeRate $exchangeRate = null;
    protected ?\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\Precision $precision = null;
    /**
     * @var string[]
     */
    protected array $localizedNames = [];
    /**
     * @var string[]
     */
    protected array $localizedSymbols = [];
    protected bool $isEnabled = false;
    /**
     * @var int[]
     */
    protected array $shopIds = [];
    /**
     * @var string[]
     */
    protected array $localizedTransformations = [];
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyException
     */
    public function __construct(int $currencyId)
    {
    }
    public function getCurrencyId(): \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId
    {
    }
    public function getExchangeRate(): ?\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\ExchangeRate
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyConstraintException
     */
    public function setExchangeRate(float $exchangeRate): self
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
    public function setIsEnabled(bool $isEnabled): self
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
