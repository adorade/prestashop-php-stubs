<?php

namespace PrestaShop\PrestaShop\Core\Localization\Currency;

/**
 * Currency repository class.
 *
 * Used to get Localization/Currency instances (by currency code for example)
 */
class Repository implements \PrestaShop\PrestaShop\Core\Localization\Currency\RepositoryInterface
{
    /**
     * Available currencies, indexed by ISO code.
     * Lazy loaded.
     *
     * @var Currency[]
     */
    protected $currencies;
    /**
     * @var CurrencyDataSourceInterface
     */
    protected $dataSource;
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\Currency\DataSourceInterface $dataSource)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCurrency($currencyCode, $localeCode)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getAvailableCurrencies($localeCode)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getAllInstalledCurrencies($localeCode)
    {
    }
}
