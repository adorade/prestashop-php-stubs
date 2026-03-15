<?php

class ValidateCore
{
    public const ORDER_BY_REGEXP = '/^(?:(`?)[\w!_-]+\1\.)?(?:(`?)[\w!_-]+\2)$/';
    public const OBJECT_CLASS_NAME_REGEXP = '/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*(\\\\[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*)*$/';
    /**
     * Maximal 32 bits value: (2^32)-1
     *
     * @var int
     */
    public const MYSQL_UNSIGNED_INT_MAX = 4294967295;
    /**
     * @deprecated since 8.0.0 use PasswordPolicyConfiguration::CONFIGURATION_MINIMUM_LENGTH
     */
    public const ADMIN_PASSWORD_LENGTH = 8;
    /**
     * @deprecated since 8.0.0 use PasswordPolicyConfiguration::CONFIGURATION_MINIMUM_LENGTH
     */
    public const PASSWORD_LENGTH = 5;
    public static function isIp2Long($ip)
    {
    }
    /**
     * @deprecated since PrestaShop 8.1 and will be removed in Prestashop 9.0
     */
    public static function isAnything()
    {
    }
    /**
     * Check for e-mail validity.
     *
     * @param string $email e-mail address to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isEmail($email)
    {
    }
    /**
     * Check for module URL validity.
     *
     * @param string $url module URL to validate
     * @param array $errors Reference array for catching errors
     *
     * @return bool Validity is ok or not
     */
    public static function isModuleUrl($url, &$errors)
    {
    }
    /**
     * Check for MD5 string validity.
     *
     * @param string $md5 MD5 string to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isMd5($md5)
    {
    }
    /**
     * Check for SHA1 string validity.
     *
     * @param string $sha1 SHA1 string to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isSha1($sha1)
    {
    }
    /**
     * Check for a float number validity.
     *
     * @param float $float Float number to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isFloat($float)
    {
    }
    public static function isUnsignedFloat($float)
    {
    }
    /**
     * Check for a float number validity.
     *
     * @param float $float Float number to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isOptFloat($float)
    {
    }
    /**
     * Check for a carrier name validity.
     *
     * @param string $name Carrier name to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isCarrierName($name)
    {
    }
    /**
     * Check for an image size validity.
     *
     * @param string $size Image size to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isImageSize($size)
    {
    }
    /**
     * Check whether given customer name is valid
     *
     * @param string $name Name to validate
     *
     * @return bool
     */
    public static function isCustomerName($name)
    {
    }
    /**
     * Check whether given name is valid
     *
     * @param string $name Name to validate
     *
     * @return bool
     */
    public static function isName($name)
    {
    }
    /**
     * Check for hook name validity.
     *
     * @param string $hook Hook name to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isHookName($hook)
    {
    }
    /**
     * Check for sender name validity.
     *
     * @param string $mail_name Sender name to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isMailName($mail_name)
    {
    }
    /**
     * Check for e-mail subject validity.
     *
     * @param string $mail_subject e-mail subject to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isMailSubject($mail_subject)
    {
    }
    /**
     * Check for module name validity.
     *
     * @param string $module_name Module name to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isModuleName($module_name)
    {
    }
    /**
     * Check for template name validity.
     *
     * @param string $tpl_name Template name to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isTplName($tpl_name)
    {
    }
    /**
     * Check for image type name validity.
     *
     * @param string $type Image type name to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isImageTypeName($type)
    {
    }
    /**
     * Check for price validity.
     *
     * @param string $price Price to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isPrice($price)
    {
    }
    /**
     * Check for price validity (including negative price).
     *
     * @param string $price Price to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isNegativePrice($price)
    {
    }
    /**
     * Check for language code (ISO) validity.
     *
     * @param string $iso_code Language code (ISO) to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isLanguageIsoCode($iso_code)
    {
    }
    public static function isLanguageCode($s)
    {
    }
    /**
     * @see https://en.wikipedia.org/wiki/IETF_language_tag#ISO_3166-1_and_UN_M.49
     *
     * @param string $s
     *
     * @return bool
     */
    public static function isLocale($s)
    {
    }
    public static function isStateIsoCode($iso_code)
    {
    }
    public static function isNumericIsoCode($iso_code)
    {
    }
    /**
     * Check for voucher name validity.
     *
     * @param string $voucher voucher to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isDiscountName($voucher)
    {
    }
    /**
     * Check for product or category name validity.
     *
     * @param string $name Product or category name to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isCatalogName($name)
    {
    }
    /**
     * Check for a message validity.
     *
     * @param string $message Message to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isMessage($message)
    {
    }
    /**
     * Check for a country name validity.
     *
     * @param string $name Country name to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isCountryName($name)
    {
    }
    /**
     * Check for a link (url-rewriting only) validity.
     *
     * @param string $link Link to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isLinkRewrite($link)
    {
    }
    /**
     * Check for a route pattern validity.
     *
     * @param string $pattern to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isRoutePattern($pattern)
    {
    }
    /**
     * Check for a postal address validity.
     *
     * @param string $address Address to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isAddress($address)
    {
    }
    /**
     * Check for city name validity.
     *
     * @param string $city City name to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isCityName($city)
    {
    }
    /**
     * Check for search query validity.
     *
     * @param string $search Query to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isValidSearch($search)
    {
    }
    /**
     * Check for standard name validity.
     *
     * @param string $name Name to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isGenericName($name)
    {
    }
    /**
     * Check for HTML field validity (no XSS please !).
     *
     * @param string $html HTML field to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isCleanHtml($html, $allow_iframe = \false)
    {
    }
    /**
     * Check for product reference validity.
     *
     * @param string $reference Product reference to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isReference($reference)
    {
    }
    /**
     * Check if the password score is valid
     *
     * @param string $password Password to validate
     *
     * @return bool Indicates whether the given string is a valid password
     *
     * @since 8.0.0
     */
    public static function isAcceptablePasswordScore(string $password): bool
    {
    }
    /**
     * Check if password length is valid
     *
     * @param string $password Password to validate
     *
     * @return bool Indicates whether the given string is a valid password length
     *
     * @since 8.0.0
     */
    public static function isAcceptablePasswordLength(string $password): bool
    {
    }
    /**
     * Check if plaintext password is valid
     * Size is limited by `password_hash()` (72 chars).
     *
     * @param string $plaintextPasswd Password to validate
     * @param int $size
     *
     * @return bool Indicates whether the given string is a valid plaintext password
     *
     * @since 1.7.0
     * @deprecated since 8.0, use Validate::isAcceptablePasswordLength instead
     */
    public static function isPlaintextPassword($plaintextPasswd, $size = \Validate::PASSWORD_LENGTH)
    {
    }
    /**
     * Check if hashed password is valid
     * PrestaShop supports both MD5 and `PASSWORD_BCRYPT` (PHP API)
     * The lengths are 32 (MD5) or 60 (`PASSWORD_BCRYPT`)
     * Anything else is invalid.
     *
     * @param string $hashedPasswd Password to validate
     *
     * @return bool Indicates whether the given string is a valid hashed password
     *
     * @since 1.7.0
     */
    public static function isHashedPassword($hashedPasswd)
    {
    }
    /**
     * @deprecated since 8.0
     */
    public static function isPasswdAdmin($passwd)
    {
    }
    /**
     * Check for configuration key validity.
     *
     * @param string $config_name Configuration key to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isConfigName($config_name)
    {
    }
    /**
     * Check date formats like http://php.net/manual/en/function.date.php.
     *
     * @param string $date_format date format to check
     *
     * @return bool Validity is ok or not
     */
    public static function isPhpDateFormat($date_format)
    {
    }
    /**
     * Check for date format.
     *
     * @param string $date Date to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isDateFormat($date)
    {
    }
    /**
     * Check for date validity.
     *
     * @param string $date Date to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isDate($date)
    {
    }
    public static function isDateOrNull($date)
    {
    }
    /**
     * Check for birthDate validity. To avoid year in two digits, disallow date < 200 years ago
     *
     * @param string $date birthdate to validate
     * @param string $format optional format
     *
     * @return bool Validity is ok or not
     */
    public static function isBirthDate($date, $format = 'Y-m-d')
    {
    }
    /**
     * Check for boolean validity.
     *
     * @param mixed $bool Value to validate as a boolean
     *
     * @return bool Validity is ok or not
     */
    public static function isBool($bool)
    {
    }
    /**
     * Check for phone number validity.
     *
     * @param string $number Phone number to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isPhoneNumber($number)
    {
    }
    /**
     * Check for barcode validity (EAN-13).
     *
     * @param string $ean13 Barcode to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isEan13($ean13)
    {
    }
    /**
     * Check for ISBN.
     *
     * @param string $isbn validate
     *
     * @return bool Validity is ok or not
     */
    public static function isIsbn($isbn)
    {
    }
    /**
     * Check for barcode validity (UPC).
     *
     * @param string $upc Barcode to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isUpc($upc)
    {
    }
    /**
     * Check for MPN validity.
     *
     * @param string $mpn to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isMpn($mpn)
    {
    }
    /**
     * Check for postal code validity.
     *
     * @param string $postcode Postal code to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isPostCode($postcode)
    {
    }
    /**
     * Check for zip code format validity.
     *
     * @param string $zip_code zip code format to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isZipCodeFormat($zip_code)
    {
    }
    /**
     * Check for table or identifier validity
     * Mostly used in database for ordering : ASC / DESC.
     *
     * @param string $way Keyword to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isOrderWay($way)
    {
    }
    /**
     * Check for table or identifier validity
     * Mostly used in database for ordering : ORDER BY field.
     *
     * @param string $order Field to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isOrderBy($order)
    {
    }
    /**
     * Check for table or identifier validity
     * Mostly used in database for table names and id_table.
     *
     * @param string $table Table/identifier to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isTableOrIdentifier($table)
    {
    }
    /**
     * Check for tags list validity.
     *
     * @param string $list List to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isTagsList($list)
    {
    }
    /**
     * Check for product visibility.
     *
     * @param string $s visibility to check
     *
     * @return bool Validity is ok or not
     */
    public static function isProductVisibility($s)
    {
    }
    /**
     * Check for an integer validity.
     *
     * @param int|bool $value Integer to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isInt($value)
    {
    }
    /**
     * Check for an integer validity (unsigned).
     *
     * @param mixed $value Integer to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isUnsignedInt($value)
    {
    }
    /**
     * Check for a number (int) bigger than 0
     *
     * @param mixed $value Integer with value bigger than 0 to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isPositiveInt($value)
    {
    }
    /**
     * Check for an percentage validity (between 0 and 100).
     *
     * @param float $value Float to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isPercentage($value)
    {
    }
    /**
     * Check for an integer validity (unsigned)
     * Mostly used in database for auto-increment.
     *
     * @param int $id Integer to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isUnsignedId($id)
    {
    }
    public static function isNullOrUnsignedId($id)
    {
    }
    /**
     * Check object validity.
     *
     * @param object $object Object to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isLoadedObject($object)
    {
    }
    /**
     * Check color validity.
     *
     * @param string $color Color to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isColor($color)
    {
    }
    /**
     * Check url validity (disallowed empty string).
     *
     * @param string $url Url to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isUrl($url)
    {
    }
    /**
     * Check tracking number validity (disallowed empty string).
     *
     * @param string $tracking_number Tracking number to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isTrackingNumber($tracking_number)
    {
    }
    /**
     * Check url validity (allowed empty string).
     *
     * @param string $url Url to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isUrlOrEmpty($url)
    {
    }
    /**
     * Check if URL is absolute.
     *
     * @param string $url URL to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isAbsoluteUrl($url)
    {
    }
    public static function isMySQLEngine($engine)
    {
    }
    public static function isUnixName($data)
    {
    }
    public static function isTablePrefix($data)
    {
    }
    /**
     * Check for standard name file validity.
     *
     * @param string $name Name to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isFileName($name)
    {
    }
    /**
     * Check for standard name directory validity.
     *
     * @param string $dir Directory to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isDirName($dir)
    {
    }
    /**
     * Check for admin panel tab name validity.
     *
     * @param string $name Name to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isTabName($name)
    {
    }
    public static function isWeightUnit($unit)
    {
    }
    public static function isDistanceUnit($unit)
    {
    }
    public static function isSubDomainName($domain)
    {
    }
    public static function isVoucherDescription($text)
    {
    }
    /**
     * Check if the value is a sort direction value (DESC/ASC).
     *
     * @param string $value
     *
     * @return bool Validity is ok or not
     */
    public static function isSortDirection($value)
    {
    }
    /**
     * Customization fields' label validity.
     *
     * @param string $label
     *
     * @return bool Validity is ok or not
     */
    public static function isLabel($label)
    {
    }
    /**
     * Price display method validity.
     *
     * @param int $data Data to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isPriceDisplayMethod($data)
    {
    }
    /**
     * @param string $dni to validate
     *
     * @return bool
     */
    public static function isDniLite($dni)
    {
    }
    /**
     * Check if $data is a PrestaShop cookie object.
     *
     * @param mixed $data to validate
     *
     * @return bool
     */
    public static function isCookie($data)
    {
    }
    /**
     * Check if $data is a string.
     *
     * @param string $data Data to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isString($data)
    {
    }
    /**
     * Check if the data is a reduction type (amout or percentage).
     *
     * @param string $data Data to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isReductionType($data)
    {
    }
    /**
     * Check for bool_id.
     *
     * @param string $ids
     *
     * @return bool Validity is ok or not
     */
    public static function isBoolId($ids)
    {
    }
    /**
     * Check the localization pack part selected.
     *
     * @param string $data Localization pack to check
     *
     * @return bool Validity is ok or not
     */
    public static function isLocalizationPackSelection($data)
    {
    }
    /**
     * Check for PHP serialized data.
     *
     * @param string|null $data Serialized data to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isSerializedArray($data)
    {
    }
    /**
     * Check if $string is a valid JSON string.
     *
     * @param string $string JSON string to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isJson($string)
    {
    }
    /**
     * Check for Latitude/Longitude.
     *
     * @param string|null $data Coordinate to validate
     *
     * @return bool Validity is ok or not
     */
    public static function isCoordinate($data)
    {
    }
    /**
     * Check for Language Iso Code.
     *
     * @param string $iso_code
     *
     * @return bool Validity is ok or not
     */
    public static function isLangIsoCode($iso_code)
    {
    }
    /**
     * Check for Language File Name.
     *
     * @param string $file_name
     *
     * @return bool Validity is ok or not
     */
    public static function isLanguageFileName($file_name)
    {
    }
    /**
     * @param array $ids
     *
     * @return bool return true if the array contain only unsigned int value and not empty
     */
    public static function isArrayWithIds($ids)
    {
    }
    /**
     * @param array $stock_management
     *
     * @return bool return true if is a valide stock management
     */
    public static function isStockManagement($stock_management)
    {
    }
    /**
     * Validate SIRET Code.
     *
     * @param string $siret SIRET Code
     *
     * @return bool Return true if is valid
     */
    public static function isSiret($siret)
    {
    }
    /**
     * Validate APE Code.
     *
     * @param string $ape APE Code
     *
     * @return bool Return true if is valid
     */
    public static function isApe($ape)
    {
    }
    public static function isControllerName($name)
    {
    }
    public static function isPrestaShopVersion($version)
    {
    }
    public static function isOrderInvoiceNumber($id)
    {
    }
    public static function isThemeName($theme_name)
    {
    }
    /**
     * Check if enable_insecure_rsh exists in
     * this PHP version otherwise disable the
     * oProxyCommand option.
     *
     * @return bool
     */
    public static function isValidImapUrl($imapUrl)
    {
    }
    /**
     * Check the given string is a valid PHP class name
     *
     * @param string $objectClassName object class name
     *
     * @return bool
     */
    public static function isValidObjectClassName(string $objectClassName): bool
    {
    }
}
