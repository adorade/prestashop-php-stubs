<?php

class LanguageCore extends \ObjectModel implements \PrestaShop\PrestaShop\Core\Language\LanguageInterface
{
    public const ALL_LANGUAGES_FILE = '/app/Resources/all_languages.json';
    public const SF_LANGUAGE_PACK_URL = 'https://i18n.prestashop-project.org/translations/%version%/%locale%/%locale%.zip';
    public const EMAILS_LANGUAGE_PACK_URL = 'https://i18n.prestashop-project.org/mails/%version%/%locale%/%locale%.zip';
    public const PACK_TYPE_EMAILS = 'emails';
    public const PACK_TYPE_SYMFONY = 'sf';
    /**
     * Timeout for downloading a translation pack, in seconds
     */
    public const PACK_DOWNLOAD_TIMEOUT = 20;
    /** @var int */
    public $id;
    /** @var string Name */
    public $name;
    /** @var string 2-letter iso code */
    public $iso_code;
    /** @var string 5-letter iso code */
    public $locale;
    /** @var string 5-letter iso code */
    public $language_code;
    /** @var string date format http://http://php.net/manual/en/function.date.php with the date only */
    public $date_format_lite = 'Y‑m‑d';
    // note the use of non-breaking hyphens (U+2011)
    /** @var string date format http://http://php.net/manual/en/function.date.php with hours and minutes */
    public $date_format_full = 'Y‑m‑d H:i:s';
    // note the use of non-breaking hyphens (U+2011)
    /** @var bool true if this language is right to left language */
    public $is_rtl = \false;
    /** @var bool Status */
    public $active = \true;
    protected static $_cache_language_installation = \null;
    protected static $_cache_language_installation_by_locale = \null;
    /** @var array|null Contains data from all languages, indexed by locale */
    protected static $_cache_all_language_json = \null;
    /** @var array|null Contains data from all languages, indexed by iso code */
    protected static $_cache_all_languages_iso;
    public static $locale_crowdin_lang = 'en-UD';
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'lang', 'primary' => 'id_lang', 'fields' => ['name' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => \true, 'size' => 32], 'iso_code' => ['type' => self::TYPE_STRING, 'validate' => 'isLanguageIsoCode', 'required' => \true, 'size' => 2], 'locale' => ['type' => self::TYPE_STRING, 'validate' => 'isLocale', 'size' => 5], 'language_code' => ['type' => self::TYPE_STRING, 'validate' => 'isLanguageCode', 'size' => 5], 'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'is_rtl' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'date_format_lite' => ['type' => self::TYPE_STRING, 'validate' => 'isPhpDateFormat', 'required' => \true, 'size' => 32], 'date_format_full' => ['type' => self::TYPE_STRING, 'validate' => 'isPhpDateFormat', 'required' => \true, 'size' => 32]]];
    /** @var array|null Languages cache */
    protected static $_checkedLangs;
    /**
     * @var array[]|null language information, indexed by id_language
     *
     * @see loadLanguages()
     */
    protected static $_LANGUAGES;
    protected static $countActiveLanguages = [];
    protected $webserviceParameters = ['objectNodeName' => 'language', 'objectsNodeName' => 'languages'];
    protected $translationsFilesAndVars = ['fields' => '_FIELDS', 'errors' => '_ERRORS', 'admin' => '_LANGADM', 'pdf' => '_LANGPDF', 'tabs' => 'tabs'];
    public static function resetStaticCache()
    {
    }
    public static function resetCache()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
    }
    /**
     * Move translations files after editing language iso code.
     */
    public function moveToIso($newIso)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function add($autodate = \true, $nullValues = \false, $only_add = \false)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Checks if every files exists for this language
     *
     * @see checkFilesWithIsoCode()
     *
     * @return bool
     */
    public function checkFiles()
    {
    }
    /**
     * This functions checks if every files exists for the language $iso_code.
     * Concerned files are those located in translations/$iso_code/
     * and translations/mails/$iso_code .
     *
     * @param string $iso_code 2-letter ISO code
     *
     * @return bool True if all files exists
     */
    public static function checkFilesWithIsoCode($iso_code)
    {
    }
    /**
     * @param string $iso_from
     * @param string $theme_from
     * @param string|bool $iso_to
     * @param string|bool $theme_to
     * @param bool|string $select
     * @param bool $check
     * @param bool $modules
     *
     * @return string[]
     *
     * @throws PrestaShopException
     */
    public static function getFilesList($iso_from, $theme_from, $iso_to = \false, $theme_to = \false, $select = \false, $check = \false, $modules = \false)
    {
    }
    /**
     * loadUpdateSQL will create default lang values when you create a new lang, based on current lang id.
     *
     * @return bool True if success
     */
    public function loadUpdateSQL()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function delete()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function deleteSelection($selection)
    {
    }
    /**
     * Returns installed languages.
     *
     * @see loadLanguages()
     *
     * @param bool $active Select only active languages
     * @param int|bool $id_shop Shop ID
     * @param bool $ids_only If true, returns an array of language IDs
     *
     * @return array<int|array> Language information
     */
    public static function getLanguages($active = \true, $id_shop = \false, $ids_only = \false)
    {
    }
    /**
     * Returns an array of installed language IDs.
     *
     * @param bool $active Select only active languages
     * @param int|false $id_shop Shop ID
     *
     * @return array
     */
    public static function getIDs($active = \true, $id_shop = \false)
    {
    }
    /**
     * Returns installed language information for the provided id_lang
     *
     * @param int $id_lang Language Id
     *
     * @return array|false
     */
    public static function getLanguage($id_lang)
    {
    }
    /**
     * Return iso code from id (installed languages only).
     *
     * @param int $id_lang Language ID
     *
     * @return string|bool 2-letter ISO code
     */
    public static function getIsoById($id_lang)
    {
    }
    /**
     * Provides locale by language id (e.g. en-US, fr-FR, ru-RU)
     *
     * @param int $langId
     *
     * @return string|null
     */
    public static function getLocaleById(int $langId): ?string
    {
    }
    /**
     * Returns language information form the all_languages file using IETF language tag
     *
     * @param string $locale IETF language tag
     *
     * @return array|false
     *
     * @throws Exception
     */
    public static function getJsonLanguageDetails($locale)
    {
    }
    /**
     * Returns language id from iso code.
     *
     * @param string $iso_code Iso code
     * @param bool $no_cache
     *
     * @return int|null Language id, or null if not found
     */
    public static function getIdByIso($iso_code, $no_cache = \false)
    {
    }
    /**
     * Returns language id from locale
     *
     * @param string $locale Locale IETF language tag
     * @param bool $noCache
     *
     * @return int|false|null
     */
    public static function getIdByLocale($locale, $noCache = \false)
    {
    }
    /**
     * Returns language information from the all-languages file
     *
     * @param string $iso 2-letter ISO code
     *
     * @return string[]|false
     *
     * @throws Exception
     */
    public static function getLangDetails($iso)
    {
    }
    /**
     * Returns locale with iso parameter.
     *
     * @param string $isoCode 2-letter ISO code
     *
     * @return string|false
     *
     * @throws Exception
     */
    public static function getLocaleByIso($isoCode)
    {
    }
    /**
     * Returns iso with locale parameter.
     *
     * @param string $locale
     *
     * @return string|false
     *
     * @throws Exception
     */
    public static function getIsoByLocale($locale)
    {
    }
    /**
     * Retrieves a language code from an installed language using a 2-letter iso code
     *
     * @param string $iso_code 2-letter iso code
     *
     * @return string|false Returns the language code, or false if it doesn't exist
     *
     * @throws PrestaShopException
     */
    public static function getLanguageCodeByIso($iso_code)
    {
    }
    /**
     * Retrieves an installed language by IETF language tag
     *
     * @param string $code IETF language tag
     *
     * @return Language|false
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public static function getLanguageByIETFCode($code)
    {
    }
    /**
     * Return array (id_lang, iso_code).
     *
     * @param bool $active Select only active languages
     *
     * @return array Language (id_lang, iso_code)
     */
    public static function getIsoIds($active = \true)
    {
    }
    /**
     * Copies translated information in *_lang tables from one language to another
     *
     * @param int $from Source language id
     * @param int $to Destination language id
     *
     * @return true
     *
     * @throws PrestaShopDatabaseException
     */
    public static function copyLanguageData($from, $to)
    {
    }
    /**
     * Load all installed languages in memory for caching.
     */
    public static function loadLanguages()
    {
    }
    public static function loadLanguagesLegacy()
    {
    }
    /**
     * Adds a language
     *
     * @param string $iso_code 2-letter language ISO code
     * @param array|false $lang_pack [default=false] Pack information. By default, this is automatically retrieved from all_languages.json.
     * @param bool $only_add [default=false] If true, do not create copies of translated fields in *_lang tables
     * @param ?array $params_lang [default=null] See allow_accented_chars_url
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public static function checkAndAddLanguage($iso_code, $lang_pack = \false, $only_add = \false, $params_lang = \null)
    {
    }
    public static function isInstalled($iso_code)
    {
    }
    public static function isInstalledByLocale($locale)
    {
    }
    public static function countActiveLanguages($id_shop = \null)
    {
    }
    public static function downloadAndInstallLanguagePack($iso, $version = \_PS_VERSION_, $params = \null, $install = \true)
    {
    }
    public static function downloadLanguagePack($iso, $version, &$errors = [])
    {
    }
    /**
     * Downloads a language pack into local cache
     *
     * @param string $locale IETF language tag
     * @param array $errors
     * @param string $type self:PACK_TYPE_SYMFONY|self::PACK_TYPE_EMAILS
     *
     * @return bool
     */
    public static function downloadXLFLanguagePack($locale, &$errors = [], $type = self::PACK_TYPE_SYMFONY)
    {
    }
    /**
     * Extracts a local translation pack
     *
     * @param string $locale IETF language tag
     * @param array $errors
     *
     * @return bool
     */
    public static function installSfLanguagePack($locale, &$errors = [])
    {
    }
    /**
     * Installs a language pack and updates language sensitive information
     *
     * @param string $iso Language ISO code
     * @param array $params Optional parameters for self::checkAndAddLanguage
     * @param array $errors
     *
     * @return array|true Array of errors, or true if all goes well
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public static function installLanguagePack($iso, $params, &$errors = [])
    {
    }
    /**
     * Installs the first language pack (during shop install)
     *
     * @param string $iso Language ISO code
     * @param array $params Optional parameters for self::checkAndAddLanguage
     * @param array $errors
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public static function installFirstLanguagePack(string $iso, array $params = [], array &$errors = []): bool
    {
    }
    public static function updateLanguagePack($iso, &$errors = [])
    {
    }
    /**
     * Check if more on than one language is activated.
     *
     * @since 1.5.0
     *
     * @return bool
     */
    public static function isMultiLanguageActivated($id_shop = \null)
    {
    }
    public static function getLanguagePackListContent($iso, $tar)
    {
    }
    /**
     * Updates multilanguage tables in all languages using DataLang
     *
     * @param array $modules_list [deprecated since 1.7.7] Not used anymore
     */
    public static function updateModulesTranslations(array $modules_list = [])
    {
    }
    /**
     * Update all table_lang from xlf & DataLang.
     *
     * @param string $iso_code 2-letter language code
     *
     * @return bool
     */
    public static function updateMultilangTable($iso_code)
    {
    }
    /**
     * Translates translatable content in the requested database tables
     *
     * @param Language $language Language to translate to
     * @param string[] $tablesToUpdate Tables to update (including datbase prefix, ending in _lang)
     *
     * @throws PrestaShopException
     */
    public static function updateMultilangTables(\Language $language, array $tablesToUpdate)
    {
    }
    /**
     * @param Language $lang
     *
     * @throws PrestaShopDatabaseException
     */
    public static function updateMultilangFromCldr($lang)
    {
    }
    /**
     * Updates multilang tables using DataLang classes
     *
     * @param string $table
     * @param string $className
     * @param LanguageCore $lang
     *
     * @throws PrestaShopDatabaseException
     */
    public static function updateMultilangFromClass($table, $className, $lang)
    {
    }
    /**
     * Returns an RTL stylesheet processor instance.
     *
     * @return RtlStylesheetProcessor
     */
    public static function getRtlStylesheetProcessor()
    {
    }
    /**
     * Indicates if a given translation pack exists in cache
     *
     * @param string $type IETF language tag
     * @param string $locale self::PACK_TYPE_SYMFONY|self::PACK_TYPE_EMAILS
     *
     * @return bool
     */
    public static function translationPackIsInCache(string $locale, string $type = self::PACK_TYPE_SYMFONY): bool
    {
    }
    /**
     * @return string return the language locale, or its code by default
     */
    public function getLocale()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getIsoCode()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getLanguageCode()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isRTL()
    {
    }
}
