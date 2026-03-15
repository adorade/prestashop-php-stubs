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
 * @since 1.5.0
 */
class ShopGroupCore extends \ObjectModel
{
    public $name;
    public $color;
    public $active = \true;
    public $share_customer;
    public $share_stock;
    public $share_order;
    public $deleted;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'shop_group', 'primary' => 'id_shop_group', 'fields' => ['name' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => \true, 'size' => 64], 'color' => ['type' => self::TYPE_STRING, 'validate' => 'isColor'], 'share_customer' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'share_order' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'share_stock' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'deleted' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool']]];
    /**
     * @see ObjectModel::getFields()
     *
     * @return array
     */
    public function getFields()
    {
    }
    public static function getShopGroups($active = \true)
    {
    }
    /**
     * @return int Total of shop groups
     */
    public static function getTotalShopGroup($active = \true)
    {
    }
    public function haveShops()
    {
    }
    public function getTotalShops()
    {
    }
    public static function getShopsFromGroup($id_group)
    {
    }
    /**
     * Return a group shop ID from group shop name.
     *
     * @param string $name
     *
     * @return int
     */
    public static function getIdByName($name)
    {
    }
    /**
     * Detect dependency with customer or orders.
     *
     * @param int $id_shop_group
     * @param string $check all|customer|order
     *
     * @return bool
     */
    public static function hasDependency($id_shop_group, $check = 'all')
    {
    }
    public function shopNameExists($name, $id_shop = \false)
    {
    }
}
