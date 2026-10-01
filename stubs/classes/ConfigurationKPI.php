<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Class ConfigurationKPICore.
 */
class ConfigurationKPICore extends \Configuration
{
    public static $definition_backup;
    /**
     * Set KPI definition.
     */
    public static function setKpiDefinition()
    {
    }
    /**
     * Unset KPI definition.
     */
    public static function unsetKpiDefinition()
    {
    }
    /**
     * Get ID by name.
     *
     * @param string $key Configuration key
     * @param int|null $idShopGroup ShopGroup ID
     * @param int|null $idShop Shop ID
     *
     * @return int ConfigurationKPI ID
     */
    public static function getIdByName($key, $idShopGroup = \null, $idShop = \null)
    {
    }
    /**
     * Load configuration.
     */
    public static function loadConfiguration()
    {
    }
    /**
     * Get value.
     *
     * @param string $key Configuration key
     * @param null $idLang Language ID
     * @param null $idShopGroup ShopGroup ID
     * @param null $idShop Shop ID
     * @param bool $default Default value
     *
     * @return string
     */
    public static function get($key, $idLang = \null, $idShopGroup = \null, $idShop = \null, $default = \false)
    {
    }
    /**
     * Get global vlaue.
     *
     * @param string $key Configuration key
     * @param int|null $idLang Language ID
     *
     * @return string Global value
     */
    public static function getGlobalValue($key, $idLang = \null)
    {
    }
    /**
     * Get value independent from language.
     *
     * @param string $key Configuration key
     * @param null $idShopGroup ShopGroup ID
     * @param null $idShop Shop ID
     *
     * @return array Values for key for all available languages
     */
    public static function getInt($key, $idShopGroup = \null, $idShop = \null)
    {
    }
    /**
     * Get multiple keys.
     *
     * @param array $keys Configuation keys
     * @param int|null $idLang Language ID
     * @param int|null $idShopGroup ShopGroup ID
     * @param int|null $idShop Shop ID
     *
     * @return array Configuration values
     */
    public static function getMultiple($keys, $idLang = \null, $idShopGroup = \null, $idShop = \null)
    {
    }
    /**
     * Has key.
     *
     * @param string $key
     * @param int|null $idLang Language ID
     * @param int|null $idShopGroup ShopGroup ID
     * @param int|null $idShop Shop ID
     *
     * @return bool
     */
    public static function hasKey($key, $idLang = \null, $idShopGroup = \null, $idShop = \null)
    {
    }
    /**
     * Set key.
     *
     * @param string $key Configuration key
     * @param mixed $values Values
     * @param null $idShopGroup ShopGroup ID
     * @param null $idShop Shop ID
     */
    public static function set($key, $values, $idShopGroup = \null, $idShop = \null)
    {
    }
    /**
     * Update global value.
     *
     * @param string $key Configuration key
     * @param mixed $values Values
     * @param bool $html Do the values contain HTML?
     *
     * @return bool Indicates whether the key was successfully updated
     */
    public static function updateGlobalValue($key, $values, $html = \false)
    {
    }
    /**
     * Update value.
     *
     * @param string $key Configuration key
     * @param mixed $values Values
     * @param bool $html Do the values contain HTML?
     * @param null $idShopGroup ShopGroup ID
     * @param null $idShop Shop ID
     *
     * @return bool Indicates whether the key was successfully updated
     */
    public static function updateValue($key, $values, $html = \false, $idShopGroup = \null, $idShop = \null)
    {
    }
    /**
     * @param string $key
     *
     * @return bool
     */
    public static function deleteByName($key)
    {
    }
    /**
     * @param string $key
     * @param int|null $idShopGroup
     * @param int|null $idShop
     *
     * @return bool
     */
    public static function deleteFromContext($key, ?int $idShopGroup = \null, ?int $idShop = \null)
    {
    }
    /**
     * @param string $key
     * @param int $idLang
     * @param int $context
     *
     * @return bool
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
     * @param string $key
     *
     * @return bool
     */
    public static function isLangKey($key)
    {
    }
    /**
     * @param int $idShopGroup
     * @param int $idShop
     *
     * @return string
     */
    protected static function sqlRestriction($idShopGroup, $idShop)
    {
    }
}
