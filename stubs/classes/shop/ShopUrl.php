<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class ShopUrlCore extends \ObjectModel
{
    public $id_shop;
    public $domain;
    public $domain_ssl;
    public $physical_uri;
    public $virtual_uri;
    public $main;
    public $active;
    protected static $main_domain = [];
    protected static $main_domain_ssl = [];
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'shop_url', 'primary' => 'id_shop_url', 'fields' => ['active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'main' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'domain' => ['type' => self::TYPE_STRING, 'required' => \true, 'size' => 255, 'validate' => 'isCleanHtml'], 'domain_ssl' => ['type' => self::TYPE_STRING, 'size' => 255, 'validate' => 'isCleanHtml'], 'id_shop' => ['type' => self::TYPE_INT, 'required' => \true], 'physical_uri' => ['type' => self::TYPE_STRING, 'size' => 64], 'virtual_uri' => ['type' => self::TYPE_STRING, 'size' => 64]]];
    protected $webserviceParameters = ['fields' => ['id_shop' => ['xlink_resource' => 'shops']]];
    /**
     * @see ObjectModel::getFields()
     *
     * @return array
     */
    public function getFields()
    {
    }
    public function getBaseURI()
    {
    }
    public function getURL($ssl = \false)
    {
    }
    /**
     * Get list of shop urls.
     *
     * @param int|bool $id_shop
     *
     * @return PrestaShopCollection Collection of ShopUrl
     */
    public static function getShopUrls($id_shop = \false)
    {
    }
    public function setMain()
    {
    }
    public function canAddThisUrl($domain, $domain_ssl, $physical_uri, $virtual_uri)
    {
    }
    public static function cacheMainDomainForShop($id_shop)
    {
    }
    public static function resetMainDomainCache()
    {
    }
    public static function getMainShopDomain($id_shop = \null)
    {
    }
    public static function getMainShopDomainSSL($id_shop = \null)
    {
    }
}
