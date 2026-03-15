<?php

namespace PrestaShopBundle\Twig\Extension;

class LocalizationExtension extends \Twig\Extension\AbstractExtension
{
    /**
     * @param string $contextDateFormatFull
     * @param string $contextDateFormatLight
     * @param Repository $localeRepository
     * @param Language|null $contextLanguage No strict type for this one because another Language class is used during install
     * @param Currency|null $contextCurrency
     */
    public function __construct(string $contextDateFormatFull, string $contextDateFormatLight, \PrestaShop\PrestaShop\Core\Localization\Locale\Repository $localeRepository, $contextLanguage, ?\Currency $contextCurrency)
    {
    }
    public function getFilters(): array
    {
    }
    /**
     * @param float $price
     * @param string|null $currencyCode
     * @param string|null $locale
     *
     * @return string
     */
    public function priceFormat(float $price, string $currencyCode = null, string $locale = null): string
    {
    }
    /**
     * @param DateTimeInterface|string $date
     *
     * @return string
     */
    public function dateFormatFull($date): string
    {
    }
    /**
     * @param DateTimeInterface|string $date
     *
     * @return string
     */
    public function dateFormatLite($date): string
    {
    }
}
