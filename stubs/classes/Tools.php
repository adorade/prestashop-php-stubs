<?php

class ToolsCore
{
    public const CACERT_LOCATION = 'https://curl.haxx.se/ca/cacert.pem';
    public const SERVICE_LOCALE_REPOSITORY = 'prestashop.core.localization.locale.repository';
    public const CACHE_LIFETIME_SECONDS = 604800;
    public const PASSWORDGEN_FLAG_NUMERIC = \PrestaShop\PrestaShop\Core\Security\PasswordGenerator::PASSWORDGEN_FLAG_NUMERIC;
    public const PASSWORDGEN_FLAG_NO_NUMERIC = \PrestaShop\PrestaShop\Core\Security\PasswordGenerator::PASSWORDGEN_FLAG_NO_NUMERIC;
    public const PASSWORDGEN_FLAG_RANDOM = \PrestaShop\PrestaShop\Core\Security\PasswordGenerator::PASSWORDGEN_FLAG_RANDOM;
    public const PASSWORDGEN_FLAG_ALPHANUMERIC = \PrestaShop\PrestaShop\Core\Security\PasswordGenerator::PASSWORDGEN_FLAG_ALPHANUMERIC;
    public const LANGUAGE_EXTRACTOR_REGEXP = '#(?<=-)\w\w|\w\w(?!-)#';
    protected static $file_exists_cache = [];
    protected static $_forceCompile;
    protected static $_caching;
    protected static $_string_modifier;
    protected static $_user_plateform;
    protected static $_user_browser;
    protected static $request;
    protected static $cldr_cache = [];
    protected static $colorBrightnessCalculator;
    protected static $fallbackParameters = [];
    public static $round_mode = \null;
    /**
     * @param Request $request
     */
    public function __construct(\Symfony\Component\HttpFoundation\Request $request = \null)
    {
    }
    /**
     * Properly clean static cache
     */
    public static function resetStaticCache()
    {
    }
    /**
     * Reset the request set during the first new Tools($request) call.
     */
    public static function resetRequest()
    {
    }
    /**
     * Random password generator.
     *
     * @param int $length Desired length (optional)
     * @param string $flag Output type (NUMERIC, ALPHANUMERIC, NO_NUMERIC, RANDOM)
     *
     * @return bool|string Password
     */
    public static function passwdGen($length = 8, $flag = self::PASSWORDGEN_FLAG_ALPHANUMERIC)
    {
    }
    /**
     * Random bytes generator.
     *
     * Limited to OpenSSL since 1.7.0.0
     *
     * @deprecated Since 8.1.0
     *
     * @param int $length Desired length of random bytes
     *
     * @return bool|string Random bytes
     */
    public static function getBytes($length)
    {
    }
    /**
     * Replace text within a portion of a string.
     *
     * Replaces a string matching a search, (optionally) string from a certain position
     *
     * @param string $search The string to search in the input string
     * @param string $replace The replacement string
     * @param string $subject The input string
     * @param int $cur Starting position cursor for the search
     *
     * @return string the result string is returned
     */
    public static function strReplaceFirst($search, $replace, $subject, $cur = 0)
    {
    }
    /**
     * Redirect user to another page.
     *
     * Warning: uses exit
     *
     * @param string $url Desired URL
     * @param string $base_uri Base URI (optional)
     * @param Link|null $link
     * @param string|array $headers A list of headers to send before redirection
     */
    public static function redirect($url, $base_uri = \__PS_BASE_URI__, \Link $link = \null, $headers = \null)
    {
    }
    /**
     * Redirect URLs already containing PS_BASE_URI.
     *
     * Warning: uses exit
     *
     * @param string $url Desired URL
     *
     * @deprecated since PrestaShop 8.0.0
     */
    public static function redirectLink($url)
    {
    }
    /**
     * Redirect user to another page (using header Location)
     *
     * Warning: uses exit
     *
     * @param string $url Desired URL
     */
    public static function redirectAdmin($url)
    {
    }
    /**
     * Returns the available protocol for the current shop in use
     * SSL if Configuration is set on and available for the server.
     *
     * @return string
     */
    public static function getShopProtocol()
    {
    }
    /**
     * Returns the set protocol according to configuration (http[s]).
     *
     * @param bool $use_ssl true if require ssl
     *
     * @return string (http|https)
     */
    public static function getProtocol($use_ssl = \null)
    {
    }
    /**
     * Returns the <b>current</b> host used, with the protocol (http or https) if $http is true
     * This function should not be used to choose http or https domain name.
     * Use Tools::getShopDomain() or Tools::getShopDomainSsl instead.
     *
     * @param bool $http
     * @param bool $entities
     * @param bool $ignore_port
     *
     * @return string host
     */
    public static function getHttpHost($http = \false, $entities = \false, $ignore_port = \false)
    {
    }
    /**
     * Returns domain name according to configuration and ignoring ssl.
     *
     * @param bool $http if true, return domain name with protocol
     * @param bool $entities if true, convert special chars to HTML entities
     *
     * @return string domain
     */
    public static function getShopDomain($http = \false, $entities = \false)
    {
    }
    /**
     * Returns domain name according to configuration and depending on ssl activation.
     *
     * @param bool $http if true, return domain name with protocol
     * @param bool $entities if true, convert special chars to HTML entities
     *
     * @return string domain
     */
    public static function getShopDomainSsl($http = \false, $entities = \false)
    {
    }
    /**
     * Get the server variable SERVER_NAME.
     * Relies on $_SERVER
     *
     * @return string server name
     */
    public static function getServerName()
    {
    }
    /**
     * Get the server variable REMOTE_ADDR, or the first ip of HTTP_X_FORWARDED_FOR (when using proxy).
     *
     * @return string $remote_addr ip of client
     */
    public static function getRemoteAddr()
    {
    }
    /**
     * Check if the current page use SSL connection on not.
     * Relies on $_SERVER global being filled
     *
     * @return bool true if SSL is used
     */
    public static function usingSecureMode()
    {
    }
    /**
     * Get the current url prefix protocol (https/http).
     *
     * @return string protocol
     */
    public static function getCurrentUrlProtocolPrefix()
    {
    }
    /**
     * Get the current url
     *
     * @return string current url
     */
    public static function getCurrentUrl(): string
    {
    }
    /**
     * Returns a safe URL referrer.
     *
     * @param string $referrer URL referrer
     *
     * @return string secured referrer
     */
    public static function secureReferrer($referrer)
    {
    }
    /**
     * Indicates if the provided URL belongs to this shop (relative urls count as belonging to the shop).
     *
     * @param string $url
     *
     * @return bool
     */
    public static function urlBelongsToShop($url)
    {
    }
    /**
     * Safely extracts the host part from an URL.
     *
     * @param string $url
     *
     * @return string
     */
    public static function extractHost($url)
    {
    }
    /**
     * Get a value from $_POST / $_GET
     * if unavailable, take a default value.
     *
     * @param string $key Value key
     * @param mixed $default_value (optional)
     *
     * @return mixed Value
     */
    public static function getValue($key, $default_value = \false)
    {
    }
    /**
     * Get all values from $_POST/$_GET.
     *
     * @return mixed
     */
    public static function getAllValues()
    {
    }
    /**
     * Checks if a key exists either in $_POST or $_GET.
     *
     * @param string $key
     *
     * @return bool
     */
    public static function getIsset($key)
    {
    }
    /**
     * Change language in cookie while clicking on a flag.
     *
     * @return string iso code
     */
    public static function setCookieLanguage($cookie = \null)
    {
    }
    /**
     * If necessary change cookie language ID and context language.
     *
     * @param Context|null $context
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public static function switchLanguage(\Context $context = \null)
    {
    }
    public static function getCountry($address = \null)
    {
    }
    /**
     * Set cookie currency from POST or default currency.
     *
     * @return Currency|array
     */
    public static function setCurrency($cookie)
    {
    }
    /**
     * Return price with currency sign for a given product.
     *
     * @deprecated Since 1.7.6.0. Please use Locale::formatPrice() instead
     * @see PrestaShop\PrestaShop\Core\Localization\Locale
     *
     * @param float $price Product price
     * @param int|Currency|array|null $currency Current currency (object, id_currency, NULL => context currency)
     * @param bool $no_utf8 Not used anymore
     * @param Context|null $context
     *
     * @return string Price correctly formatted (sign, decimal separator...)
     *                if you modify this function, don't forget to modify the Javascript function formatCurrency (in tools.js)
     *
     * @throws LocalizationException
     */
    public static function displayPrice($price, $currency = \null, $no_utf8 = \false, \Context $context = \null)
    {
    }
    /**
     * Return current locale
     *
     * @param Context $context
     *
     * @return Locale
     *
     * @throws Exception
     */
    public static function getContextLocale(\Context $context)
    {
    }
    /**
     * Returns a well formatted number.
     *
     * @deprecated Since 1.7.6.0. Please use Locale::formatNumber() instead
     * @see Locale
     *
     * @param int|float|string $number The number to format
     * @param null $currency not used anymore
     *
     * @return string The formatted number
     *
     * @throws Exception
     * @throws LocalizationException
     */
    public static function displayNumber($number, $currency = \null)
    {
    }
    public static function displayPriceSmarty($params, &$smarty)
    {
    }
    /**
     * Return price converted.
     *
     * @param float|null $price Product price
     * @param array|Currency|int|null $currency Current currency object
     * @param bool $to_currency convert to currency or from currency to default currency
     * @param Context|null $context
     *
     * @return float|null Price
     */
    public static function convertPrice($price, $currency = \null, $to_currency = \true, \Context $context = \null)
    {
    }
    /**
     * Convert amount from a currency to an other currency automatically.
     *
     * @param float $amount
     * @param Currency $currency_from if null we used the default currency
     * @param Currency $currency_to if null we used the default currency
     */
    public static function convertPriceFull($amount, \Currency $currency_from = \null, \Currency $currency_to = \null)
    {
    }
    /**
     * Display date regarding to language preferences.
     *
     * @param array $params Date, format...
     * @param object $smarty Smarty object for language preferences
     *
     * @return string Date
     */
    public static function dateFormat($params, &$smarty)
    {
    }
    /**
     * Display date regarding to language preferences.
     *
     * @param string $date Date to display format UNIX
     * @param bool $full With time or not (optional)
     *
     * @return string Date
     */
    public static function displayDate($date, $full = \false)
    {
    }
    /**
     * Get localized date format.
     *
     * @return string Date format
     */
    public static function getDateFormat()
    {
    }
    /**
     * Get formatted date.
     *
     * @param string $date_str Date string
     * @param bool $full With time or not (optional)
     *
     * @return string Formatted date
     */
    public static function formatDateStr($date_str, $full = \false)
    {
    }
    /**
     * Sanitize a string.
     *
     * @param string $string String to sanitize
     * @param bool $html String contains HTML or not (optional)
     *
     * @return string Sanitized string
     */
    public static function safeOutput($string, $html = \false)
    {
    }
    public static function htmlentitiesUTF8($string, $type = \ENT_QUOTES)
    {
    }
    public static function htmlentitiesDecodeUTF8($string)
    {
    }
    /**
     * @deprecated Since 8.0.0
     */
    public static function safePostVars()
    {
    }
    /**
     * Delete directory and subdirectories.
     *
     * @param string $dirname Directory name
     */
    public static function deleteDirectory($dirname, $delete_self = \true)
    {
    }
    /**
     * Delete file.
     *
     * @param string $file File path
     * @param array $exclude_files Excluded files
     *
     * @return bool
     */
    public static function deleteFile($file, $exclude_files = [])
    {
    }
    /**
     * Clear XML cache folder.
     */
    public static function clearXMLCache()
    {
    }
    /**
     * Depending on _PS_MODE_DEV_ throws an exception or returns a error message.
     *
     * @param string|null $errorMessage Error message (defaults to "Fatal error")
     * @param bool $htmlentities DEPRECATED since 1.7.4.0
     * @param Context|null $context DEPRECATED since 1.7.4.0
     *
     * @return string
     *
     * @throws PrestaShopException If _PS_MODE_DEV_ is enabled
     */
    public static function displayError($errorMessage = \null, $htmlentities = \null, \Context $context = \null)
    {
    }
    /**
     * Display an error with detailed object.
     *
     * @param mixed $object
     * @param bool $kill
     *
     * @return mixed
     */
    public static function dieObject($object, $kill = \true)
    {
    }
    public static function debug_backtrace($start = 0, $limit = \null)
    {
    }
    /**
     * Prints object information into error log.
     *
     * @see error_log()
     *
     * @param mixed $object
     * @param int|null $message_type
     * @param string|null $destination
     * @param string|null $extra_headers
     *
     * @return bool
     */
    public static function error_log($object, $message_type = \null, $destination = \null, $extra_headers = \null)
    {
    }
    /**
     * Check if submit has been posted.
     *
     * @param string $submit submit name
     */
    public static function isSubmit($submit)
    {
    }
    /**
     * Hash password.
     *
     * @param string $passwd String to hash
     *
     * @return string Hashed password
     *
     * @deprecated 1.7.0
     */
    public static function encrypt($passwd)
    {
    }
    /**
     * Hash password.
     *
     * @param string $passwd String to has
     *
     * @return string Hashed password
     *
     * @since 1.7.0
     */
    public static function hash($passwd)
    {
    }
    /**
     * Hash data string.
     *
     * @param string $data String to encrypt
     *
     * @return string Hashed IV
     *
     * @deprecated 1.7.0
     */
    public static function encryptIV($data)
    {
    }
    /**
     * Hash data string.
     *
     * @param string $data String to encrypt
     *
     * @return string Hashed IV
     *
     * @since 1.7.0
     */
    public static function hashIV($data)
    {
    }
    /**
     * Get token to prevent CSRF.
     *
     * @param bool $page
     * @param Context|null $context
     *
     * @return string
     */
    public static function getToken($page = \true, \Context $context = \null)
    {
    }
    /**
     * Tokenize a string.
     *
     * @param string $string String to encrypt
     *
     * @return string|bool false if given string is empty
     */
    public static function getAdminToken($string)
    {
    }
    /**
     * @param string $tab
     * @param Context $context
     *
     * @return bool|string
     */
    public static function getAdminTokenLite($tab, \Context $context = \null)
    {
    }
    /**
     * @param array $params
     * @param Smarty|null $smarty unused parameter, please ignore (@todo: remove in next major)
     *
     * @return bool|string
     */
    public static function getAdminTokenLiteSmarty($params, &$smarty = \null)
    {
    }
    /**
     * Get a valid URL to use from BackOffice.
     *
     * @param string $url An URL to use in BackOffice
     * @param bool $entities Set to true to use htmlentities function on URL param
     *
     * @return string
     */
    public static function getAdminUrl($url = \null, $entities = \false)
    {
    }
    /**
     * Get a valid image URL to use from BackOffice.
     *
     * @param string $image Image name
     * @param bool $entities Set to true to use htmlentities function on image param
     *
     * @return string
     */
    public static function getAdminImageUrl($image = \null, $entities = \false)
    {
    }
    /**
     * Return the friendly url from the provided string.
     *
     * @deprecated since 8.1
     *
     * @param string $str
     * @param bool $utf8_decode (deprecated)
     *
     * @return string
     */
    public static function link_rewrite($str, $utf8_decode = \null)
    {
    }
    /**
     * Return a friendly url made from the provided string
     * If the mbstring library is available, the output is the same as the js function of the same name.
     *
     * @param string $str
     *
     * @return string|bool
     */
    public static function str2url($str)
    {
    }
    /**
     * Replace all accented chars by their equivalent non accented chars.
     *
     * @param string $str
     *
     * @return string
     */
    public static function replaceAccentedChars($str)
    {
    }
    /**
     * Truncate strings.
     *
     * @param string $str
     * @param int $max_length Max length
     * @param string $suffix Suffix optional
     *
     * @return string $str truncated
     */
    /* CAUTION : Use it only on module hookEvents.
     ** For other purposes use the smarty function instead */
    public static function truncate($str, $max_length, $suffix = '...')
    {
    }
    /*Copied from CakePHP String utility file*/
    public static function truncateString($text, $length = 120, $options = [])
    {
    }
    public static function normalizeDirectory($directory)
    {
    }
    /**
     * Generate date form.
     *
     * @return array $tab html data with 3 cells :['days'], ['months'], ['years']
     */
    public static function dateYears()
    {
    }
    public static function dateDays()
    {
    }
    public static function dateMonths()
    {
    }
    public static function hourGenerate($hours, $minutes, $seconds)
    {
    }
    public static function dateFrom($date)
    {
    }
    public static function dateTo($date)
    {
    }
    public static function strtolower($str)
    {
    }
    public static function strlen($str, $encoding = 'UTF-8')
    {
    }
    /**
     * @deprecated Since 8.0.0
     */
    public static function stripslashes($string)
    {
    }
    public static function strtoupper($str)
    {
    }
    public static function substr($str, $start, $length = \false, $encoding = 'UTF-8')
    {
    }
    public static function strpos($str, $find, $offset = 0, $encoding = 'UTF-8')
    {
    }
    public static function strrpos($str, $find, $offset = 0, $encoding = 'UTF-8')
    {
    }
    public static function ucfirst($str)
    {
    }
    public static function ucwords($str)
    {
    }
    public static function orderbyPrice(&$array, $order_way)
    {
    }
    public static function iconv($from, $to, $string)
    {
    }
    public static function isEmpty($field)
    {
    }
    /**
     * returns the rounded value of $value to specified precision, according to your configuration;.
     *
     * @note : PHP 5.3.0 introduce a 3rd parameter mode in round function
     *
     * @param float $value
     * @param int $precision
     *
     * @return float
     */
    public static function ps_round($value, $precision = 0, $round_mode = \null)
    {
    }
    /**
     * @param int|float $value
     * @param int|float $places
     * @param int<2,5> $mode (PS_ROUND_HALF_UP|PS_ROUND_HALF_DOWN|PS_ROUND_HALF_EVEN|PS_ROUND_HALF_ODD)
     *
     * @return false|float
     */
    public static function math_round($value, $places, $mode = \PS_ROUND_HALF_UP)
    {
    }
    /**
     * @param float $value
     * @param int $mode
     *
     * @return float
     */
    public static function round_helper($value, $mode)
    {
    }
    /**
     * Returns the rounded value up of $value to specified precision.
     *
     * @param float $value
     * @param int $precision
     *
     * @return float
     */
    public static function ceilf($value, $precision = 0)
    {
    }
    /**
     * Returns the rounded value down of $value to specified precision.
     *
     * @param float $value
     * @param int $precision
     *
     * @return float
     */
    public static function floorf($value, $precision = 0)
    {
    }
    /**
     * file_exists() wrapper with cache to speedup performance.
     *
     * @param string $filename File name
     *
     * @return bool Cached result of file_exists($filename)
     */
    public static function file_exists_cache($filename)
    {
    }
    /**
     * file_exists() wrapper with a call to clearstatcache prior.
     *
     * @param string $filename File name
     *
     * @return bool Cached result of file_exists($filename)
     */
    public static function file_exists_no_cache($filename)
    {
    }
    /**
     * Refresh local CACert file.
     */
    public static function refreshCACertFile()
    {
    }
    /**
     * This method allows to get the content from either a URL or a local file.
     *
     * @param string $url the url to get the content from
     * @param bool $use_include_path second parameter of http://php.net/manual/en/function.file-get-contents.php
     * @param resource $stream_context third parameter of http://php.net/manual/en/function.file-get-contents.php
     * @param int $curl_timeout
     * @param bool $fallback whether or not to use the fallback if the main solution fails
     *
     * @return bool|string false or the string content
     */
    public static function file_get_contents($url, $use_include_path = \false, $stream_context = \null, $curl_timeout = 5, $fallback = \false)
    {
    }
    /**
     * Create a local file from url
     * required because ZipArchive is unable to extract from remote files.
     *
     * @param string $url the remote location
     *
     * @return bool|string false if failure, else the local filename
     */
    public static function createFileFromUrl($url)
    {
    }
    public static function simplexml_load_file($url, $class_name = \null)
    {
    }
    public static function copy($source, $destination, $stream_context = \null)
    {
    }
    /**
     * Translates a string with underscores into camel case (e.g. first_name -> firstName).
     *
     * @prototype string public static function toCamelCase(string $str[, bool $capitalise_first_char = false])
     *
     * @param string $str Source string to convert in camel case
     * @param bool $capitaliseFirstChar Optionnal parameters to transform the first letter in upper case
     *
     * @return string The string in camel case
     */
    public static function toCamelCase($str, $capitaliseFirstChar = \false)
    {
    }
    /**
     * Transform a CamelCase string to underscore_case string.
     *
     * 'CMSCategories' => 'cms_categories'
     * 'RangePrice' => 'range_price'
     *
     * @param string $string
     *
     * @return string
     */
    public static function toUnderscoreCase($string)
    {
    }
    /**
     * Converts SomethingLikeThis to something-like-this
     *
     * @param string $string
     *
     * @return string
     */
    public static function camelCaseToKebabCase($string)
    {
    }
    /**
     * @deprecated since 8.1 use PrestaShop\PrestaShop\Core\Util\ColorBrightnessCalculator::isBright function instead
     *
     * @param string $hex
     *
     * @return float|int|string
     */
    public static function getBrightness($hex)
    {
    }
    /**
     * @deprecated since 8.1 use PrestaShop\PrestaShop\Core\Util\ColorBrightnessCalculator::isBright function instead
     */
    public static function isBright($hex)
    {
    }
    public static function parserSQL($sql)
    {
    }
    public static function replaceByAbsoluteURL($matches)
    {
    }
    protected static $_cache_nb_media_servers = \null;
    /**
     * @return bool
     */
    public static function hasMediaServer(): bool
    {
    }
    /**
     * @param string $filename
     *
     * @return string
     */
    public static function getMediaServer(string $filename): string
    {
    }
    /**
     * Get domains information with physical and virtual paths
     *
     * e.g: [
     *  prestashop.localhost => [
     *    physical => "/",
     *    virtual => "",
     *    id_shop => "1",
     *  ]
     * ]
     *
     * @return array
     */
    public static function getDomains()
    {
    }
    public static function generateHtaccess($path = \null, $rewrite_settings = \null, $cache_control = \null, $specific = '', $disable_multiviews = \null, $medias = \false, $disable_modsec = \null)
    {
    }
    /**
     * @param bool $executeHook
     *
     * @return bool
     */
    public static function generateRobotsFile($executeHook = \false)
    {
    }
    /**
     * @return array
     */
    public static function getRobotsContent()
    {
    }
    public static function generateIndex()
    {
    }
    /**
     * @return string php file to be run
     */
    public static function getDefaultIndexContent()
    {
    }
    /**
     * Return the directory list from the given $path.
     *
     * @param string $path
     *
     * @return array
     */
    public static function getDirectories($path)
    {
    }
    /**
     * Return the directory list from the given $path using php glob function.
     *
     * @param string $path
     *
     * @return array
     */
    public static function getDirectoriesWithGlob($path)
    {
    }
    /**
     * Return the directory list from the given $path using php readdir function.
     *
     * @param string $path
     *
     * @return array
     */
    public static function getDirectoriesWithReaddir($path)
    {
    }
    /**
     * Display a warning message indicating that the method is deprecated.
     *
     * @param string $message
     */
    public static function displayAsDeprecated($message = \null)
    {
    }
    /**
     * Display a warning message indicating that the parameter is deprecated.
     */
    public static function displayParameterAsDeprecated($parameter)
    {
    }
    public static function displayFileAsDeprecated()
    {
    }
    protected static function throwDeprecated($error, $message, $class)
    {
    }
    public static function enableCache($level = 1, \Context $context = \null)
    {
    }
    public static function restoreCacheSettings(\Context $context = \null)
    {
    }
    public static function isCallable($function)
    {
    }
    public static function pRegexp($s, $delim)
    {
    }
    public static function str_replace_once($needle, $replace, $haystack)
    {
    }
    /**
     * Identify the version of php
     *
     * @return string
     */
    public static function checkPhpVersion()
    {
    }
    /**
     * Try to open a zip file in order to check if it's valid
     *
     * @param string $from_file
     *
     * @return bool success
     */
    public static function ZipTest($from_file)
    {
    }
    /**
     * Extract a zip file to the given directory
     *
     * @param string $from_file
     * @param string $to_dir
     *
     * @return bool
     */
    public static function ZipExtract($from_file, $to_dir)
    {
    }
    /**
     * @param string $path
     * @param int $filemode
     *
     * @return bool
     */
    public static function chmodr($path, $filemode)
    {
    }
    /**
     * Get products order field name for queries.
     *
     * @param string $type by|way
     * @param string|bool|null $value If no index given, use default order from admin -> pref -> products
     * @param bool|string $prefix
     *
     * @return string Order by sql clause
     */
    public static function getProductsOrder($type, $value = \null, $prefix = \false)
    {
    }
    /**
     * Convert a shorthand byte value from a PHP configuration directive to an integer value.
     *
     * @param string $value value to convert
     *
     * @return int|string
     */
    public static function convertBytes($value)
    {
    }
    /**
     * Concat $begin and $end, add ? or & between strings.
     *
     * @since 1.5.0
     *
     * @param string $begin
     * @param string $end
     *
     * @return string
     */
    public static function url($begin, $end)
    {
    }
    /**
     * Display error and dies or silently log the error.
     *
     * @param string $msg
     * @param bool $die
     *
     * @return bool success of logging
     */
    public static function dieOrLog($msg, $die = \true)
    {
    }
    /**
     * Convert \n and \r\n and \r to <br />.
     *
     * @param string|null $str String to transform
     *
     * @return string|null New string
     */
    public static function nl2br($str)
    {
    }
    /**
     * Clear cache for Smarty.
     *
     * @param Smarty $smarty
     * @param bool|string $tpl
     * @param string $cache_id
     * @param string $compile_id
     *
     * @return int|null number of cache files deleted
     */
    public static function clearCache($smarty = \null, $tpl = \false, $cache_id = \null, $compile_id = \null)
    {
    }
    /**
     * Clear compile for Smarty.
     *
     * @param Smarty $smarty
     *
     * @return int|null number of template files deleted
     */
    public static function clearCompile($smarty = \null)
    {
    }
    /**
     * Clear Smarty cache and compile folders.
     */
    public static function clearSmartyCache()
    {
    }
    /**
     * Clear Symfony cache.
     *
     * @param string $env
     */
    public static function clearSf2Cache($env = \null)
    {
    }
    /**
     * Clear both Smarty and Symfony cache.
     */
    public static function clearAllCache()
    {
    }
    /**
     * @deprecated since 8.1 and will be removed in next major version.
     *
     * @param int|bool $id_product
     */
    public static function clearColorListCache($id_product = \false)
    {
    }
    /**
     * Allow to get the memory limit in octets.
     *
     * @since 1.4.5.0
     *
     * @return int|string the memory limit value in octet
     */
    public static function getMemoryLimit()
    {
    }
    /**
     * Gets the value of a configuration option in octets.
     *
     * @since 1.5.0
     *
     * @param string $option
     *
     * @return int|string the value of a configuration option in octets
     */
    public static function getOctets($option)
    {
    }
    /**
     * @return bool true if the server use 64bit arch
     */
    public static function isX86_64arch()
    {
    }
    /**
     * @return bool true if php-cli is used
     */
    public static function isPHPCLI()
    {
    }
    public static function argvToGET($argc, $argv)
    {
    }
    /**
     * Get max file upload size considering server settings and optional max value.
     *
     * @param int $max_size optional max file size
     *
     * @return int max file size in bytes
     */
    public static function getMaxUploadSize($max_size = 0)
    {
    }
    /**
     * apacheModExists return true if the apache module $name is loaded.
     *
     * @TODO move this method in class Information (when it will exist)
     *
     * Notes: This method requires either apache_get_modules or phpinfo()
     * to be available. With CGI mod, we cannot get php modules
     *
     * @param string $name module name
     *
     * @return bool true if exists
     *
     * @since 1.4.5.0
     */
    public static function apacheModExists($name)
    {
    }
    /**
     * Fix native uasort see: http://php.net/manual/en/function.uasort.php#114535.
     *
     * @param array $array
     * @param callable $cmp_function
     */
    public static function uasort(&$array, $cmp_function)
    {
    }
    /**
     * Copy the folder $src into $dst, $dst is created if it do not exist.
     *
     * @param string $src
     * @param string $dst
     * @param bool $del if true, delete the file after copy
     */
    public static function recurseCopy($src, $dst, $del = \false)
    {
    }
    /**
     * @param string $path Path to scan
     * @param string $ext Extention to filter files
     * @param string $dir Add this to prefix output for example /path/dir/*
     *
     * @return array List of file found
     *
     * @since 1.5.0
     */
    public static function scandir($path, $ext = 'php', $dir = '', $recursive = \false)
    {
    }
    /**
     * Align version sent and use internal function.
     *
     * @param string $v1
     * @param string $v2
     * @param string $operator
     *
     * @return mixed
     */
    public static function version_compare($v1, $v2, $operator = '<')
    {
    }
    /**
     * Align 2 version with the same number of sub version
     * version_compare will work better for its comparison :)
     * (Means: '1.8' to '1.9.3' will change '1.8' to '1.8.0').
     *
     * @param string $v1
     * @param string $v2
     */
    public static function alignVersionNumber(&$v1, &$v2)
    {
    }
    public static function modRewriteActive()
    {
    }
    public static function unSerialize($serialized, $object = \false)
    {
    }
    /**
     * Reproduce array_unique working before php version 5.2.9.
     *
     * @param array $array
     *
     * @return array
     */
    public static function arrayUnique($array)
    {
    }
    /**
     * Delete unicode class from regular expression patterns.
     *
     * @deprecated Since 8.0.0 and will be removed in the next major.
     *
     * @param string $pattern
     *
     * @return string pattern
     *
     * @throws Exception
     */
    public static function cleanNonUnicodeSupport($pattern)
    {
    }
    /**
     * Returns an array containing information about
     * HTTP file upload variable ($_FILES).
     *
     * @param string $input File upload field name
     * @param bool $return_content If true, returns uploaded file contents
     *
     * @return array|null
     */
    public static function fileAttachment($input = 'fileUpload', $return_content = \true)
    {
    }
    public static function changeFileMTime($file_name)
    {
    }
    public static function waitUntilFileIsModified($file_name, $timeout = 180)
    {
    }
    /**
     * Delete a substring from another one starting from the right.
     *
     * @param string $str
     * @param string $str_search
     *
     * @return string
     */
    public static function rtrimString($str, $str_search)
    {
    }
    /**
     * Format a number into a human readable format
     * e.g. 24962496 => 23.81M.
     *
     * @param float $size
     * @param int $precision
     *
     * @return string
     */
    public static function formatBytes($size, $precision = 2)
    {
    }
    public static function boolVal($value)
    {
    }
    public static function getUserPlatform()
    {
    }
    public static function getUserBrowser()
    {
    }
    /**
     * Allows to display the category description without HTML tags and slashes.
     *
     * @deprecated since version 8.1.0, to be removed.
     *
     * @return string
     */
    public static function getDescriptionClean($description)
    {
    }
    public static function purifyHTML($html, $uri_unescape = \null, $allow_style = \false)
    {
    }
    /**
     * Check if a constant was already defined.
     *
     * @param string $constant Constant name
     * @param mixed $value Default value to set if not defined
     */
    public static function safeDefine($constant, $value)
    {
    }
    /**
     * Spread an amount on lines, adjusting the $column field,
     * with the biggest adjustments going to the rows having the
     * highest $sort_column.
     *
     * E.g.:
     * $rows = [['a' => 5.1], ['a' => 8.2]];
     * spreadAmount(0.3, 1, $rows, 'a');
     * => $rows is [['a' => 8.4], ['a' => 5.2]]
     *
     * @param float $amount The amount to spread across the rows
     * @param int $precision Rounding precision
     *                       e.g. if $amount is 1, $precision is 0 and $rows = [['a' => 2], ['a' => 1]]
     *                       then the resulting $rows will be [['a' => 3], ['a' => 1]]
     *                       But if $precision were 1, then the resulting $rows would be [['a' => 2.5], ['a' => 1.5]]
     * @param array $rows An array, associative or not, containing arrays that have at least $column and $sort_column fields
     * @param string $column The column on which to perform adjustments
     */
    public static function spreadAmount($amount, $precision, &$rows, $column)
    {
    }
    /**
     * Replaces elements from passed arrays into the first array recursively.
     *
     * @param array $base the array in which elements are replaced
     * @param array $replacements the array from which elements will be extracted
     *
     * @deprecated since version 8.0.0, to be removed.
     */
    public static function arrayReplaceRecursive($base, $replacements)
    {
    }
    /**
     * Return path to a Product or a CMS category.
     *
     * @param string $url_base Start URL
     * @param int $id_category Start category
     * @param string $path Current path
     * @param string $highlight String to highlight (in XHTML/CSS)
     * @param string $category_type Category type (products/cms)
     * @param bool $home
     */
    public static function getPath($url_base, $id_category, $path = '', $highlight = '', $category_type = 'catalog', $home = \false)
    {
    }
    public static function redirectToInstall()
    {
    }
    /**
     * @param array $fallbackParameters
     */
    public static function setFallbackParameters(array $fallbackParameters): void
    {
    }
    /**
     * @param string $file_to_refresh
     * @param string $external_file
     *
     * @return bool
     */
    public static function refreshFile(string $file_to_refresh, string $external_file): bool
    {
    }
    /**
     * @param string $file
     * @param int $timeout
     *
     * @return bool
     */
    public static function isFileFresh(string $file, int $timeout = self::CACHE_LIFETIME_SECONDS): bool
    {
    }
    /**
     * @return bool
     */
    public static function isCountryFromBrowserAvailable(): bool
    {
    }
    /**
     * @return string|null
     */
    public static function getCountryIsoCodeFromHeader(): ?string
    {
    }
    /**
     * Inserts a new element in array after a given index
     *
     * @param array $array Array to modify
     * @param string $targetKey Key to search for
     * @param string $newDataKey Key for an added data
     * @param array $newDataArray New data to insert
     *
     * @return array
     */
    public static function arrayInsertElementAfterKey(array $array, string $targetKey, string $newDataKey, array $newDataArray): array
    {
    }
    /**
     * Checks if the current visitor is allowed to view the page even if maintenace mode is on, either via IP whitelist or being logged in in backoffice.
     */
    public static function isAllowedToBypassMaintenance()
    {
    }
}
/**
 * Compare 2 prices to sort products.
 *
 * @param array{"price_tmp": float} $a
 * @param array{"price_tmp": float} $b
 *
 * @return int
 */
function cmpPriceAsc($a, $b)
{
}
/**
 * @param array{"price_tmp": float} $a
 * @param array{"price_tmp": float} $b
 *
 * @return int
 */
function cmpPriceDesc($a, $b)
{
}
