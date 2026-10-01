<?php

namespace PrestaShopBundle\Twig\Extension;

class LocalizationExtension extends \Twig\Extension\AbstractExtension
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Localization\Locale\Repository $localeRepository, private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $languageContext, private readonly \PrestaShop\PrestaShop\Core\Context\CurrencyContext $currencyContext)
    {
    }
    public function getFilters(): array
    {
    }
    public function getFunctions()
    {
    }
    /**
     * @param float $price
     * @param string|null $currencyCode
     * @param string|null $locale
     *
     * @return string
     */
    public function priceFormat(float $price, ?string $currencyCode = null, ?string $locale = null): string
    {
    }
    /**
     * @param \DateTimeInterface|string $date
     *
     * @return string
     */
    public function dateFormatFull($date): string
    {
    }
    /**
     * @param \DateTimeInterface|string $date
     *
     * @return string
     */
    public function dateFormatLite($date): string
    {
    }
}
