<?php

namespace PrestaShop\PrestaShop\Core\Localization\CLDR;

/**
 * CLDR files reader class.
 *
 * This class provides CLDR LocaleData objects built with data coming from official CLDR xml data files.
 */
class Reader implements \PrestaShop\PrestaShop\Core\Localization\CLDR\ReaderInterface
{
    public const CLDR_ROOT = 'localization/CLDR/';
    public const CLDR_MAIN = 'localization/CLDR/core/common/main/';
    public const CLDR_SUPPLEMENTAL = 'localization/CLDR/core/common/supplemental/';
    public const CLDR_ROOT_LOCALE = 'root';
    public const SUPPL_DATA_CURRENCY = 'currencyData';
    public const SUPPL_DATA_LANGUAGE = 'languageData';
    public const SUPPL_DATA_NUMBERING = 'numberingSystems';
    public const SUPPL_DATA_PARENT_LOCALES = 'parentLocales';
    // For specific locales hierarchy
    public const DEFAULT_CURRENCY_DIGITS = 2;
    public const CURRENCY_CODE_TEST = 'XTS';
    /**
     * delay after currency deactivation to prevent currency add by list
     */
    public const CURRENCY_ACTIVE_DELAY = 365;
    protected $mainXml = [];
    /**
     * Supplemental data for all locales.
     * Contains data about parent locales, currencies, languages...
     *
     * @var SimpleXMLElement|null
     */
    protected $supplementalXml;
    /**
     * Additional data about numbering systems
     * Mainly used for digits (they depend on numbering system).
     *
     * @var SimpleXMLElement|null
     */
    protected $numberingSystemsXml;
    /**
     * Read locale data by locale code.
     *
     * @param string $localeCode The locale code (simplified IETF tag syntax)
     *                           Combination of ISO 639-1 (2-letters language code) and ISO 3166-2 (2-letters region code)
     *                           eg: fr-FR, en-US
     *                           The underscore notation is also accepted (fr_FR, en_US...)
     *
     * @return LocaleData A LocaleData object
     *
     * @throws LocalizationException When the locale code is unknown or invalid
     */
    public function readLocaleData($localeCode)
    {
    }
    /**
     * Validate a locale code.
     *
     * If the passed code doesn't respect the CLDR files naming style, an exception will be raised
     * e.g.: "fr_FR" and "en_001" are valid
     *
     * @param string $localeCode Locale code to be validated
     *
     * @throws LocalizationException When locale code is invalid
     */
    protected function validateLocaleCodeForFilenames($localeCode)
    {
    }
    /**
     * Initialize supplemental CLDR data.
     */
    protected function initSupplementalData()
    {
    }
    /**
     * Build lookup files stack for a given locale code.
     *
     * @param string $localeCode The given locale code (simplified IETF notation)
     *
     * @return array The lookup ['root', <intermediate codes>, $localeCode]
     *
     * @throws LocalizationException When locale code is invalid or unknown
     *
     * @see http://www.unicode.org/reports/tr35/tr35.html#Lookup
     */
    protected function getLookup($localeCode)
    {
    }
    /**
     * Get the parent locale for a given locale code.
     *
     * @param string $localeCode CLDR filenames' style locale code (with underscores) eg.: en, fr, en_GB, fr_FR...
     *
     * @return string|null The parent locale code (CLDR filenames' style). Null if no parent.
     *
     * @throws LocalizationException
     */
    protected function getParentLocale($localeCode)
    {
    }
    /**
     * Get CLDR official xml data for a given locale tag.
     *
     * The locale tag can be either an IETF tag (en-GB) or a simple language code (en)
     *
     * @param string $localeCode The locale code
     *
     * @return SimpleXMLElement The locale data
     *
     * @throws LocalizationFileNotFoundException If this locale code has no corresponding xml file
     */
    protected function getMainXmlData($localeCode)
    {
    }
    /**
     * Get the real path for CLDR main data folder
     * If a filename is provided, it will be added at the end of the path.
     *
     * @param string $filename (Optional) The filename to be added to the path
     *
     * @return string The realpath of CLDR main data folder
     *
     * @throws LocalizationFileNotFoundException
     */
    protected function mainPath($filename = '')
    {
    }
    /**
     * Extracts locale data from CLDR xml data.
     * XML data will be mapped in a LocaleData object.
     *
     * @param string $localeTag The wanted locale. Can be either a language code (e.g.: fr) of an IETF tag (e.g.: en-US)
     *
     * @return LocaleData
     */
    protected function getLocaleData($localeTag)
    {
    }
    /**
     * Maps locale data from SimplexmlElement to a LocaleData object.
     *
     * @param SimplexmlElement $xmlLocaleData
     *                                        XML locale data
     * @param array $supplementalData
     *                                Supplemental locale data
     *
     * @return LocaleData
     *                    The mapped locale data
     *
     * @todo use $supplementalData for non-occidental digits
     *
     * @see  http://cldr.unicode.org/development/development-process/design-proposals/resolution-of-cldr-files
     */
    protected function mapLocaleData(\SimpleXMLElement $xmlLocaleData, $supplementalData)
    {
    }
    /**
     * Extract all existing digits sets from supplemental xml data.
     *
     * @return array
     *               eg.:
     *               [
     *               'latn'     => '0123456789',
     *               'arab'     => '٠١٢٣٤٥٦٧٨٩',
     *               'fullwide' => '０１２３４５６７８９',
     *               ]
     */
    protected function getDigitsData()
    {
    }
    /**
     * @param string $currencyCode currency iso code
     * @param SimpleXMLElement $supplementalData xml bloc from CLDR
     * @param int $currencyActiveDateThreshold timestamp after which currency should be used
     *
     * @return bool
     */
    protected function shouldCurrencyBeReturned($currencyCode, \SimpleXMLElement $supplementalData, $currencyActiveDateThreshold)
    {
    }
    /**
     * check if currency is still in use in some territory
     *
     * @param array $currencyDates
     * @param int $currencyActiveDateThreshold timestamp after which currency should be used
     *
     * @return bool
     */
    protected function isCurrencyActiveSomewhere(array $currencyDates, $currencyActiveDateThreshold)
    {
    }
}
