<?php

namespace PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer;

/**
 * Currency Database data layer.
 *
 * Provides and persists currency data from/into database
 */
class CurrencyDatabase extends \PrestaShop\PrestaShop\Core\Data\Layer\AbstractDataLayer implements \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataLayerInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider
     */
    protected $dataProvider;
    /**
     * This layer must be ready only, displaying a price should not change the database data
     *
     * @var bool
     */
    protected $isWritable = false;
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $dataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $dataProvider)
    {
    }
    /**
     * Set the lower layer.
     * When reading data, if nothing is found then it will try to read in the lower data layer
     * When writing data, the data will also be written in the lower data layer.
     *
     * @param \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataLayerInterface $lowerLayer The lower data layer
     *
     * @return self
     */
    public function setLowerLayer(\PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataLayerInterface $lowerLayer)
    {
    }
    /**
     * Actually read a data object into the current layer.
     *
     * Data is read into database
     *
     * @param \PrestaShop\PrestaShop\Core\Localization\Currency\LocalizedCurrencyId $currencyDataId The CurrencyData object identifier (currency code + locale code)
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyData|null The wanted CurrencyData object (null if not found)
     *
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException When $currencyDataId is invalid
     */
    protected function doRead($currencyDataId)
    {
    }
    /**
     * Actually write a data object into the current layer
     * Here, this is a DB insert/update...
     *
     * @param \PrestaShop\PrestaShop\Core\Localization\Currency\LocalizedCurrencyId $currencyDataId The CurrencyData object identifier (currency code + locale code)
     * @param \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyData $currencyData The data object to be written
     *
     * @throws \PrestaShop\PrestaShop\Core\Data\Layer\DataLayerException If something goes wrong when trying to write into DB
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException When $currencyDataId is invalid
     */
    protected function doWrite($currencyDataId, $currencyData)
    {
    }
}
