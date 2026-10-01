<?php

namespace PrestaShop\PrestaShop\Core\Context;

/**
 * This context service gives access to all contextual data related to language.
 *
 * It also implements some core interfaces that are used in many places in the code so that the
 * context can be injected and used in place of these interfaces.
 */
class LanguageContext implements \PrestaShop\PrestaShop\Core\Language\LanguageInterface, \PrestaShop\PrestaShop\Core\Localization\LocaleInterface
{
    public function __construct(protected readonly int $id, protected readonly string $name, protected readonly string $isoCode, protected readonly string $locale, protected readonly string $languageCode, protected readonly bool $isRTL, protected readonly string $dateFormat, protected readonly string $dateTimeFormat, protected readonly \PrestaShop\PrestaShop\Core\Localization\LocaleInterface $localizationLocale)
    {
    }
    public function getId(): int
    {
    }
    public function getName(): string
    {
    }
    public function getIsoCode(): string
    {
    }
    public function getLocale(): string
    {
    }
    public function getLanguageCode(): string
    {
    }
    public function isRTL(): bool
    {
    }
    public function getDateFormat(): string
    {
    }
    public function getDateTimeFormat(): string
    {
    }
    public function getCode(): string
    {
    }
    public function formatNumber(int|float|string $number): string
    {
    }
    public function formatPrice(int|float|string $number, string $currencyCode): string
    {
    }
    public function getPriceSpecification(string $currencyCode): \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface
    {
    }
    public function getNumberSpecification(): \PrestaShop\PrestaShop\Core\Localization\Specification\NumberInterface
    {
    }
}
