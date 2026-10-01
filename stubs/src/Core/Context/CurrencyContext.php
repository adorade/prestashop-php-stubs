<?php

namespace PrestaShop\PrestaShop\Core\Context;

/**
 * This context service gives access to all contextual data related to currency.
 */
class CurrencyContext
{
    public function __construct(protected int $id, protected string $name, protected array $localizedNames, protected string $isoCode, protected string $numericIsoCode, string $conversionRate, protected string $symbol, protected array $localizedSymbols, protected int $precision, protected string $pattern, protected array $localizedPatterns)
    {
    }
    public function getId(): int
    {
    }
    public function getName(): string
    {
    }
    public function getLocalizedNames(): array
    {
    }
    public function getIsoCode(): string
    {
    }
    public function getNumericIsoCode(): string
    {
    }
    public function getConversionRate(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    public function getSymbol(): string
    {
    }
    public function getLocalizedSymbols(): array
    {
    }
    public function getPrecision(): int
    {
    }
    public function getPattern(): string
    {
    }
    public function getLocalizedPatterns(): array
    {
    }
}
