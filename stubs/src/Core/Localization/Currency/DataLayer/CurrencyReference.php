<?php

namespace PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer;

/**
 * Localization/CurrencyReference data layer.
 *
 * Provides reference data for currencies...
 * Data comes from CLDR official data files, and is read only.
 */
class CurrencyReference extends \PrestaShop\PrestaShop\Core\Data\Layer\AbstractDataLayer implements \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataLayerInterface
{
    /**
     * CLDR locale repository.
     *
     * Provides LocaleData objects
     *
     * @var CldrLocaleRepository
     */
    protected $cldrLocaleRepository;
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository $cldrLocaleRepository)
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
     * Data is read from official CLDR files (via the CLDR LocaleRepository)
     *
     * @param LocalizedCurrencyId $currencyDataId
     *                                            The CurrencyData object identifier
     *
     * @return CurrencyData|null
     *                           The wanted CurrencyData object (null if not found)
     *
     * @throws LocalizationException
     *                               In case of invalid $currencyDataId
     *                               Also in case of invalid type asked for symbol (but use a constant, so it is very unlikely...)
     */
    protected function doRead($currencyDataId)
    {
    }
    /**
     * CLDR files are read only. Nothing can be written there.
     *
     * @param LocalizedCurrencyId $currencyDataId
     *                                            The LocaleData object identifier
     * @param CurrencyData $currencyData
     *                                   The CurrencyData object to be written
     */
    protected function doWrite($currencyDataId, $currencyData)
    {
    }
}
