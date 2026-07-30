<?php

namespace PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer;

/**
 * Locale reference data layer.
 *
 * Provides reference (CLDR) data for locale, number specification, currencies...
 * Data comes from CLDR official data files, and is read only.
 */
class LocaleReference extends \PrestaShop\PrestaShop\Core\Data\Layer\AbstractDataLayer implements \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataLayerInterface
{
    /**
     * CLDR files reader.
     *
     * Provides LocaleData objects
     *
     * @var ReaderInterface
     */
    protected $reader;
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\CLDR\ReaderInterface $reader)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setLowerLayer(\PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataLayerInterface $lowerLayer)
    {
    }
    /**
     * Actually read a CLDR LocaleData object into the current layer.
     *
     * Data is read from official CLDR file (via the CLDR files reader)
     *
     * @param string $localeCode
     *                           The CLDR LocaleData object identifier
     *
     * @return LocaleData|null
     *                         The wanted CLDR LocaleData object (null if not found)
     */
    protected function doRead($localeCode)
    {
    }
    /**
     * CLDR files are read only. Nothing can be written there.
     *
     * @param string $localeCode
     *                           The CLDR LocaleData object identifier
     * @param LocaleData $data
     *                         The CLDR LocaleData object to be written
     */
    protected function doWrite($localeCode, $data)
    {
    }
}
