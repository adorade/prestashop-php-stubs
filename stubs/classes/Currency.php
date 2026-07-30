<?php

class CurrencyCore extends \ObjectModel
{
    public $id;
    /**
     * Currency's name for the current language.
     *
     * @var string|string[]
     */
    public $name;
    /**
     * Localized names of the currency
     *
     * @var string[]
     */
    protected $localizedNames;
    /**
     * Alphabetic ISO 4217 code of this currency.
     *
     * @var string
     */
    public $iso_code;
    /**
     * Numeric ISO 4217 code of this currency
     *
     * @var string
     */
    public $iso_code_num;
    /**
     * Numeric ISO 4217 code of this currency.
     *
     * @var string|null
     */
    public $numeric_iso_code;
    /**
     * Exchange rate from default currency.
     *
     * @var float
     */
    public $conversion_rate;
    /**
     * Is this currency deleted ?
     * If currency is deleted, it stays in database. This is just a state (soft delete).
     *
     * @var bool
     */
    public $deleted = \false;
    /**
     * Is this currency unofficial ?
     *
     * @var int|bool unofficial
     */
    public $unofficial;
    /**
     * Is this currency modified ?
     *
     * @var int|bool modified
     */
    public $modified;
    /**
     * Is this currency active ?
     *
     * @var int|bool active
     */
    public $active;
    /**
     * Currency's symbol
     *
     * @deprecated Use $symbol
     *
     * @var string
     */
    public $sign;
    /**
     * Currency's symbol for the current language.
     *
     * @var string|string[]
     */
    public $symbol;
    /**
     * CLDR price formatting pattern
     * e.g.: In french (fr-FR), price formatting pattern is : #,##0.00 ¤.
     *
     * @var string
     */
    public $format;
    /**
     * @var int
     */
    public $blank;
    /**
     * Use decimals when displaying a price in this currency
     *
     * @deprecated since 1.7.0
     *
     * @var int
     */
    public $decimals;
    /**
     * Number of decimal digits to use when displaying a price in this currency.
     *
     * @var int
     */
    public $precision;
    /**
     * CLDR price pattern
     *
     * @var string|string[]
     */
    public $pattern;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'currency', 'primary' => 'id_currency', 'multilang' => \true, 'fields' => [
        'iso_code' => ['type' => self::TYPE_STRING, 'validate' => 'isLanguageIsoCode', 'required' => \true, 'size' => 3],
        'numeric_iso_code' => ['type' => self::TYPE_STRING, 'allow_null' => \true, 'validate' => 'isNumericIsoCode', 'size' => 3],
        'precision' => ['type' => self::TYPE_INT, 'validate' => 'isInt'],
        'conversion_rate' => ['type' => self::TYPE_FLOAT, 'validate' => 'isUnsignedFloat', 'required' => \true, 'shop' => \true],
        'deleted' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'unofficial' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'modified' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
        'symbol' => ['type' => self::TYPE_STRING, 'lang' => \true, 'size' => 255],
        'pattern' => ['type' => self::TYPE_STRING, 'lang' => \true, 'size' => 255],
    ]];
    /** @var array Currency cache */
    protected static $currencies = [];
    protected static $countActiveCurrencies = [];
    protected $webserviceParameters = ['objectsNodeName' => 'currencies', 'fields' => ['names' => ['getter' => 'getLocalizedNames', 'i18n' => \true], 'name' => ['getter' => 'getName', 'modifier' => ['http_method' => \WebserviceRequest::HTTP_POST | \WebserviceRequest::HTTP_PUT | \WebserviceRequest::HTTP_PATCH, 'modifier' => 'setNameForWebservice']], 'symbol' => ['getter' => 'getLocalizedSymbols'], 'iso_code' => ['modifier' => ['http_method' => \WebserviceRequest::HTTP_POST | \WebserviceRequest::HTTP_PUT | \WebserviceRequest::HTTP_PATCH, 'modifier' => 'setIsoCodeForWebService']]]];
    /**
     * contains the sign to display before price, according to its format.
     *
     * @var string
     */
    public $prefix = \null;
    /**
     * contains the sign to display after price, according to its format.
     *
     * @var string
     */
    public $suffix = \null;
    /**
     * CurrencyCore constructor.
     *
     * @param int|null $id
     * @param int|false|null $idLang if null or false, default language will be used
     * @param int|null $idShop
     */
    public function __construct($id = \null, $idLang = \null, $idShop = \null)
    {
    }
    /**
     * @param string|null $ws_params_attribute_name
     *
     * @return array
     */
    public function getWebserviceParameters($ws_params_attribute_name = \null)
    {
    }
    /**
     * If the field 'names' (localized names) is sent,
     * it should be use instead of the field 'name' (non-localized).
     * LocalizedNames is also updated to reflect the new information.
     */
    public function setNameForWebservice()
    {
    }
    /**
     * In 1.7.6, new fields have been introduced. To keep it backward compatible,
     * we need to populate those fields with default values and they are all available
     * using the ISO code through CLDR data.
     */
    public function setIsoCodeForWebService()
    {
    }
    /**
     * reset static cache (eg unit testing purpose).
     */
    public static function resetStaticCache()
    {
    }
    /**
     * Overriding check if currency rate is not empty and if currency with the same iso code already exists.
     * If it's true, currency is not added.
     *
     * @param bool $autoDate Automatically set `date_upd` and `date_add` columns
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Currency has been successfully added
     */
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    /**
     * Updates the current object in the database.
     *
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the CartRule has been successfully updated
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Check if a Currency already exists.
     *
     * @param int|string $isoCode int for iso code number string for iso code
     * @param int $idShop Shop ID
     *
     * @return bool Indicates whether the Currency already exists
     */
    public static function exists($isoCode, $idShop = 0)
    {
    }
    /**
     * Delete given Currencies.
     *
     * @param array $selection Currencies
     *
     * @return bool Indicates whether the selected Currencies have been succesfully deleted
     */
    public function deleteSelection($selection)
    {
    }
    /**
     * Deletes current object from database.
     *
     * @return bool True if delete was successful
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    /**
     * Return formatted sign.
     *
     * @param string $side left or right
     *
     * @return string formated sign
     */
    public function getSign($side = \null)
    {
    }
    /**
     * Is this currency installed for a given shop ?
     * (current shop by default).
     *
     * @param int|null $currencyId
     *                             The currency to look for (
     * @param int|null $shopId
     *                         The given shop's id
     *
     * @return bool
     *              True if this currency is installed for the given shop
     */
    public function isInstalled($currencyId = \null, $shopId = \null)
    {
    }
    /**
     * Returns the name of the currency (using the translated name base on the id_lang
     * provided on creation). This method is useful when $this->name contains an array
     * but you still need to get its name as a string.
     *
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @return string
     */
    public function getSymbol()
    {
    }
    /**
     * Names indexed by language id
     *
     * @return string[]
     */
    public function getLocalizedNames()
    {
    }
    /**
     * This setter updates the name field because it is used when you want to update
     * the database (legacy core feature). But to be consistent the names field also
     * needs to be updated.
     *
     * @param string[] $localizedNames list of currency names, the array needs to be indexed by language id
     *
     * @return $this
     */
    public function setLocalizedNames(array $localizedNames)
    {
    }
    /**
     * Symbols indexed by language id
     *
     * @return string[]
     */
    public function getLocalizedSymbols()
    {
    }
    /**
     * This setter updates the symbol field because it is used when you want to update
     * the database (legacy core feature). But to be consistent the symbols field also
     * needs to be updated.
     *
     * @param string[] $localizedSymbols list of currency symbols, the array needs to be indexed by language id
     *
     * @return CurrencyCore
     */
    public function setLocalizedSymbols(array $localizedSymbols)
    {
    }
    /**
     * @return string
     */
    public function getPattern($idLang)
    {
    }
    /**
     * Patterns indexed by language id
     *
     * @return string[]
     */
    public function getLocalizedPatterns()
    {
    }
    /**
     * This setter updates the pattern field because it is used when you want to update
     * the database (legacy core feature). But to be consistent the patterns field also
     * needs to be updated.
     *
     * @param string[] $localizedPatterns list of currency patterns, the array needs to be indexed by language id
     *
     * @return CurrencyCore
     */
    public function setLocalizedPatterns(array $localizedPatterns)
    {
    }
    /**
     * Return available currencies.
     *
     * @param bool $object
     * @param bool $active
     * @param bool $groupBy
     *
     * @return array Currencies
     */
    public static function getCurrencies($object = \false, $active = \true, $groupBy = \false)
    {
    }
    /**
     * Retrieve all currencies data from the database.
     *
     * @param bool $active If true only active are returned
     * @param bool $groupBy Group by id_currency
     * @param bool $currentShopOnly If true returns only currencies associated to current shop
     *
     * @return array Currency data from database
     *
     * @throws PrestaShopDatabaseException
     */
    public static function findAll($active = \true, $groupBy = \false, $currentShopOnly = \true)
    {
    }
    /**
     * Retrieve all currencies data from the database.
     *
     * @return array Currency data from database
     *
     * @throws PrestaShopDatabaseException
     */
    public static function findAllInstalled()
    {
    }
    /**
     * @param int|null $shopId
     *
     * @return array
     */
    public function getInstalledCurrencies($shopId = \null)
    {
    }
    /**
     * Get Currencies by Shop ID.
     *
     * @param int $idShop Shop ID
     *
     * @return array|Currency
     */
    public static function getCurrenciesByIdShop($idShop = 0)
    {
    }
    /**
     * Add Cldr datas to result query or signe object/array.
     *
     * @param array|object $currencies
     * @param bool $isObject
     *
     * @return mixed object|array
     */
    protected static function addCldrDatasToCurrency($currencies, $isObject = \false)
    {
    }
    /**
     * @param int $idModule
     * @param int|null $idShop
     *
     * @return array
     */
    public static function getPaymentCurrenciesSpecial($idModule, $idShop = \null)
    {
    }
    /**
     * Get payment Currencies.
     *
     * @param int $idModule Module ID
     * @param int|null $idShop Shop ID
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function getPaymentCurrencies($idModule, $idShop = \null)
    {
    }
    /**
     * Check payment Currencies.
     *
     * @param int $idModule Module ID
     * @param int|null $idShop Shop ID
     *
     * @return array|PDOStatement|resource|null
     */
    public static function checkPaymentCurrencies($idModule, $idShop = \null)
    {
    }
    /**
     * Get Currency.
     *
     * @param int $idCurrency Currency ID
     *
     * @return array|bool|object|null
     */
    public static function getCurrency($idCurrency)
    {
    }
    /**
     * Get Currency ID by ISO code.
     *
     * @param string $isoCode ISO code
     * @param int $idShop Shop ID
     * @param bool $forceRefreshCache [default=false] Set to TRUE to forcefully refresh any currently cached results
     * @param bool $includeDeleted [default=false] Set to TRUE to get result even for soft deleted currency
     *
     * @return int Currency ID
     */
    public static function getIdByIsoCode($isoCode, $idShop = 0, $forceRefreshCache = \false, $includeDeleted = \false)
    {
    }
    /**
     * Get Currency ISO Code by ID
     *
     * @param int $id
     * @param bool $forceRefreshCache
     *
     * @return string
     */
    public static function getIsoCodeById(int $id, bool $forceRefreshCache = \false)
    {
    }
    /**
     * Get Currency ID by numeric ISO code.
     *
     * @param int $numericIsoCode ISO code
     * @param int $idShop Shop ID
     *
     * @return int Currency ID
     */
    public static function getIdByNumericIsoCode($numericIsoCode, $idShop = 0)
    {
    }
    /**
     * Get Currency ID query.
     *
     * @param int $idShop Shop ID
     * @param bool $includeDeleted [default=false] Set to TRUE to get result even for soft deleted currency
     *
     * @return DbQuery
     */
    public static function getIdByQuery($idShop = 0, $includeDeleted = \false)
    {
    }
    /**
     * Refresh the currency exchange rate
     * The XML file define exchange rate for each from a default currency ($isoCodeSource).
     *
     * @param SimpleXMLElement $data XML content which contains all the exchange rates
     * @param string $isoCodeSource The default currency used in the XML file
     * @param Currency $defaultCurrency The default currency object
     */
    public function refreshCurrency($data, $isoCodeSource, $defaultCurrency)
    {
    }
    /**
     * Get default Currency.
     *
     * @return bool|Currency
     */
    public static function getDefaultCurrency()
    {
    }
    /**
     * Get default currency Id.
     *
     * @return int
     */
    public static function getDefaultCurrencyId(): int
    {
    }
    /**
     * Refresh Currencies.
     *
     * @return string Error message
     */
    public static function refreshCurrencies()
    {
    }
    /**
     * Get Currency instance.
     *
     * @param int $id Currency ID
     *
     * @return Currency
     */
    public static function getCurrencyInstance($id)
    {
    }
    /**
     * Get conversion rate.
     *
     * @return int|string
     *
     * @deprecated 1.7.2.0, use Currency::getConversionRate() instead
     */
    public function getConversationRate()
    {
    }
    /**
     * Get conversion rate.
     *
     * @return int|string
     */
    public function getConversionRate()
    {
    }
    /**
     * Count active Currencies.
     *
     * @param int|null $idShop Shop ID
     *
     * @return mixed Amount of active Currencies
     *               `false` if none found
     */
    public static function countActiveCurrencies($idShop = \null)
    {
    }
    /**
     * Is multi Currency activated?
     *
     * @param int|null $idShop Shop ID
     *
     * @return bool Indicates whether multi Currency is actived
     */
    public static function isMultiCurrencyActivated($idShop = \null)
    {
    }
    /**
     * This method aims to update localized data in currency from CLDR reference.
     *
     * @param array $languages
     * @param LocaleRepository $localeRepoCLDR
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException
     */
    public function refreshLocalizedCurrencyData(array $languages, \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository $localeRepoCLDR)
    {
    }
}
