<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
/**
 * Class ConfigurationCore.
 */
class ConfigurationCore extends \ObjectModel
{
    public $id;
    /** @var string Key */
    public $name;
    public $id_shop_group;
    public $id_shop;
    /** @var string|array<string> Value */
    public $value;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'configuration', 'primary' => 'id_configuration', 'multilang' => \true, 'fields' => ['name' => ['type' => self::TYPE_STRING, 'validate' => 'isConfigName', 'required' => \true, 'size' => 254], 'id_shop_group' => ['type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'], 'id_shop' => ['type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'], 'value' => ['type' => self::TYPE_STRING, 'size' => 4194303], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
    /** @var array|null Configuration cache (kept for backward compat) */
    protected static $_cache = \null;
    /** @var array|null Configuration cache with optimised key order */
    protected static $_new_cache_shop = \null;
    protected static $_new_cache_group = \null;
    protected static $_new_cache_global = \null;
    protected static $_initialized = \false;
    /** @var array Vars types */
    protected static $types = [];
    protected $webserviceParameters = ['fields' => ['value' => []]];
    /**
     * @see ObjectModel::getFieldsLang()
     *
     * @return bool|array Multilingual fields
     */
    public function getFieldsLang()
    {
    }
    /**
     * Return ID a configuration key.
     *
     * @param string $key
     * @param int $idShopGroup
     * @param int $idShop
     *
     * @return int Configuration key ID
     */
    public static function getIdByName($key, $idShopGroup = \null, $idShop = \null)
    {
    }
    /**
     * @param string $key
     * @param int|null $idShopGroup
     * @param int|null $idShop
     *
     * @return int Configuration key ID
     */
    public static function getIdByNameFromGivenContext(string $key, ?int $idShopGroup, ?int $idShop): int
    {
    }
    /**
     * Is the configuration loaded.
     *
     * @return bool `true` if configuration is loaded
     */
    public static function configurationIsLoaded()
    {
    }
    /**
     * @deprecated 8.0.0 Use resetStaticCache method instead.
     */
    public static function clearConfigurationCacheForTesting()
    {
    }
    /**
     * WARNING: For testing only. Do NOT rely on this method, it may be removed at any time.
     *
     * @todo Delegate static calls from Configuration to an instance
     * of a class to be created.
     */
    public static function resetStaticCache()
    {
    }
    /**
     * Load all configuration data.
     */
    public static function loadConfiguration()
    {
    }
    /**
     * Get a single configuration value (in one language only).
     *
     * @param string $key Key wanted
     * @param int $idLang Language ID
     *
     * @return string|false Value
     */
    public static function get($key, $idLang = \null, $idShopGroup = \null, $idShop = \null, $default = \false)
    {
    }
    /**
     * Get global value.
     *
     * @param string $key Configuration key
     * @param int|null $idLang Language ID
     *
     * @return string
     */
    public static function getGlobalValue($key, $idLang = \null)
    {
    }
    /**
     * Get a single configuration value (in multiple languages).
     *
     * @param string $key Configuration Key
     * @param int $idShopGroup Shop Group ID
     * @param int $idShop Shop ID
     *
     * @return array Values in multiple languages
     */
    public static function getConfigInMultipleLangs($key, $idShopGroup = \null, $idShop = \null)
    {
    }
    /**
     * Get a single configuration value for all shops.
     *
     * @param string $key Key wanted
     * @param int $idLang
     *
     * @return array Values for all shops
     */
    public static function getMultiShopValues($key, $idLang = \null)
    {
    }
    /**
     * Get several configuration values (in one language only).
     *
     * @throws PrestaShopException
     *
     * @param array $keys Keys wanted
     * @param int $idLang Language ID
     * @param int $idShopGroup
     * @param int $idShop
     *
     * @return array Values
     */
    public static function getMultiple($keys, $idLang = \null, $idShopGroup = \null, $idShop = \null)
    {
    }
    /**
     * Check if key exists in configuration.
     *
     * @param mixed $key
     * @param mixed|null $idLang
     * @param int|null $idShopGroup
     * @param int|null $idShop
     *
     * @return bool
     */
    public static function hasKey($key, $idLang = \null, $idShopGroup = \null, $idShop = \null)
    {
    }
    /**
     * Set TEMPORARY a single configuration value (in one language only).
     *
     * @param string $key Configuration key
     * @param mixed $values `$values` is an array if the configuration is multilingual, a single string else
     * @param int $idShopGroup
     * @param int $idShop
     */
    public static function set($key, $values, $idShopGroup = \null, $idShop = \null)
    {
    }
    /**
     * Update configuration key for global context only.
     *
     * @param string $key
     * @param mixed $values
     * @param bool $html
     *
     * @return bool
     */
    public static function updateGlobalValue($key, $values, $html = \false)
    {
    }
    /**
     * Update configuration key and value into database (automatically insert if key does not exist).
     *
     * Values are inserted/updated directly using SQL, because using (Configuration) ObjectModel
     * may not insert values correctly (for example, HTML is escaped, when it should not be).
     *
     * @TODO Fix saving HTML values in Configuration model
     *
     * @param string $key Configuration key
     * @param mixed $values $values is an array if the configuration is multilingual, a single string else
     * @param bool $html Specify if html is authorized in value
     * @param int $idShopGroup
     * @param int $idShop
     *
     * @return bool Update result
     */
    public static function updateValue($key, $values, $html = \false, $idShopGroup = \null, $idShop = \null)
    {
    }
    /**
     * Delete a configuration key in database (with or without language management).
     *
     * @param string $key Key to delete
     *
     * @return bool Deletion result
     */
    public static function deleteByName($key)
    {
    }
    /**
     * Delete configuration key from current context
     *
     * @param string $key
     * @param int $idShopGroup
     * @param int $idShop
     */
    public static function deleteFromContext($key, int $idShopGroup = \null, int $idShop = \null)
    {
    }
    /**
     * @param string $key
     * @param int|null $idShopGroup
     * @param int|null $idShop
     */
    public static function deleteFromGivenContext(string $key, ?int $idShopGroup, ?int $idShop): void
    {
    }
    public static function deleteById(int $configurationId): void
    {
    }
    /**
     * Check if configuration var is defined in given context.
     *
     * @param string $key
     * @param int|null $idLang
     * @param int $context
     */
    public static function hasContext($key, $idLang, $context)
    {
    }
    /**
     * @param string $key
     *
     * @return bool
     */
    public static function isOverridenByCurrentContext($key)
    {
    }
    /**
     * Check if a key was loaded as multi lang.
     *
     * @param string $key
     *
     * @return bool
     */
    public static function isLangKey($key)
    {
    }
    /**
     * @return bool
     */
    public static function isCatalogMode()
    {
    }
    /**
     * @return bool
     */
    public static function showPrices()
    {
    }
    /**
     * Add SQL restriction on shops for configuration table.
     *
     * @param int $idShopGroup
     * @param int $idShop
     *
     * @return string
     */
    protected static function sqlRestriction($idShopGroup, $idShop)
    {
    }
    /**
     * This method is override to allow TranslatedConfiguration entity.
     *
     * @param string $sqlJoin
     * @param string $sqlFilter
     * @param string $sqlSort
     * @param string $sqlLimit
     *
     * @return array
     */
    public function getWebserviceObjectList($sqlJoin, $sqlFilter, $sqlSort, $sqlLimit)
    {
    }
}
