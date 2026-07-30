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
