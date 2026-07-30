<?php

namespace PrestaShop\PrestaShop\Core\Localization\Currency;

/**
 * Localization CurrencyData source
 * Uses a stack of middleware data layers to read / write CurrencyData objects.
 */
class CurrencyDataSource implements \PrestaShop\PrestaShop\Core\Localization\Currency\DataSourceInterface
{
    /**
     * The top layer of the middleware stack.
     *
     * @var CurrencyDataLayerInterface
     */
    protected $topLayer;
    /**
     * @var CurrencyInstalledDataLayer
     */
    protected $installedDataLayer;
    /**
     * CurrencyDataSource constructor needs CurrencyDataLayer objects.
     * This top layer might be chained with lower layers and will be the entry point of this middleware stack.
     *
     * @param CurrencyDataLayerInterface $topLayer
     * @param CurrencyInstalledDataLayer $installedDataLayer
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataLayerInterface $topLayer, \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled $installedDataLayer)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getLocalizedCurrencyData(\PrestaShop\PrestaShop\Core\Localization\Currency\LocalizedCurrencyId $localizedCurrencyId)
    {
    }
    /**
     * Is this currency available ?
     * (an available currency is not deleted AND is active).
     *
     * @param string $currencyCode
     *
     * @return bool True if currency is available
     */
    public function isCurrencyAvailable($currencyCode)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getAvailableCurrenciesData($localeCode)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getAllInstalledCurrenciesData($localeCode)
    {
    }
}
