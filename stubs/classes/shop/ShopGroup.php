<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
    public static $definition = ['table' => 'shop_group', 'primary' => 'id_shop_group', 'fields' => ['name' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => \true, 'size' => 64], 'color' => ['type' => self::TYPE_STRING, 'validate' => 'isColor', 'size' => 50], 'share_customer' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'share_order' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'share_stock' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'deleted' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool']]];
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
