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
     * @var CurrencyDataProvider
     */
    protected $dataProvider;
    /**
     * This layer must be ready only, displaying a price should not change the database data
     *
     * @var bool
     */
    protected $isWritable = false;
    /**
     * @param CurrencyDataProvider $dataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $dataProvider)
    {
    }
    /**
     * Set the lower layer.
     * When reading data, if nothing is found then it will try to read in the lower data layer
     * When writing data, the data will also be written in the lower data layer.
     *
     * @param currencyDataLayerInterface $lowerLayer The lower data layer
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
     * @param LocalizedCurrencyId $currencyDataId The CurrencyData object identifier (currency code + locale code)
     *
     * @return CurrencyData|null The wanted CurrencyData object (null if not found)
     *
     * @throws LocalizationException When $currencyDataId is invalid
     */
    protected function doRead($currencyDataId)
    {
    }
    /**
     * Actually write a data object into the current layer
     * Here, this is a DB insert/update...
     *
     * @param LocalizedCurrencyId $currencyDataId The CurrencyData object identifier (currency code + locale code)
     * @param CurrencyData $currencyData The data object to be written
     *
     * @throws DataLayerException If something goes wrong when trying to write into DB
     * @throws LocalizationException When $currencyDataId is invalid
     */
    protected function doWrite($currencyDataId, $currencyData)
    {
    }
}
