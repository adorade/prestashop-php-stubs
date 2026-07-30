<?php

namespace PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer;

/**
 * Installed Currencies data layer.
 *
 * Provides currencies' installation info
 */
class CurrencyInstalled
{
    /**
     * This adapter will provide data from DB / ORM about Currency (via legacy entity).
     *
     * @var CurrencyDataProviderInterface
     */
    protected $dataProvider;
    public function __construct(\PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $dataProvider)
    {
    }
    /**
     * Check if a currency is currently available (not deleted + active).
     *
     * @param string $currencyCode The said currency ISO code
     *
     * @return bool True if this currency is available
     */
    public function isAvailable($currencyCode)
    {
    }
    /**
     * Get all available (not deleted + active) currencies' ISO codes.
     *
     * @return string[]
     */
    public function getAvailableCurrencyCodes()
    {
    }
    /**
     * Get all the available currencies' ISO codes (present in database no matter if it's deleted or active).
     *
     * @return string[]
     */
    public function getAllInstalledCurrencyIsoCodes()
    {
    }
}
