<?php

namespace PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer;

/**
 * Localization/CurrencyCache data layer.
 *
 * This currency data layer reads and writes Localization/CurrencyData from a cache adapter
 */
class CurrencyCache extends \PrestaShop\PrestaShop\Core\Data\Layer\AbstractDataLayer implements \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataLayerInterface
{
    public function __construct(\Symfony\Component\Cache\Adapter\AdapterInterface $cache)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setLowerLayer(\PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataLayerInterface $lowerLayer)
    {
    }
    /**
     * Actually read a CurrencyData object into the current layer.
     *
     * Might be a file access, cache read, DB select...
     *
     * @param \PrestaShop\PrestaShop\Core\Localization\Currency\LocalizedCurrencyId $id The CurrencyData object identifier (currency code + locale code)
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyData|null The wanted CurrencyData object (null if not found)
     *
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException When $currencyDataId is invalid
     */
    protected function doRead($id)
    {
    }
    /**
     * Actually write a CurrencyData object into the current layer.
     *
     * Might be a file edit, cache update, DB insert/update...
     *
     * @param \PrestaShop\PrestaShop\Core\Localization\Currency\LocalizedCurrencyId $currencyDataId The data object identifier
     * @param \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyData $currencyData The data object to be written
     *
     * @throws \PrestaShop\PrestaShop\Core\Data\Layer\DataLayerException When write fails
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException When $currencyDataId is invalid
     */
    protected function doWrite($currencyDataId, $currencyData)
    {
    }
}
