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
class RangePriceCore extends \ObjectModel
{
    /**
     * @var int
     */
    public $id_carrier;
    /**
     * @var float
     */
    public $delimiter1;
    /**
     * @var float
     */
    public $delimiter2;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'range_price', 'primary' => 'id_range_price', 'fields' => ['id_carrier' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => \true], 'delimiter1' => ['type' => self::TYPE_FLOAT, 'validate' => 'isUnsignedFloat', 'required' => \true], 'delimiter2' => ['type' => self::TYPE_FLOAT, 'validate' => 'isUnsignedFloat', 'required' => \true]]];
    protected $webserviceParameters = ['objectsNodeName' => 'price_ranges', 'objectNodeName' => 'price_range', 'fields' => ['id_carrier' => ['xlink_resource' => 'carriers']]];
    /**
     * Override add to create delivery value for all zones.
     *
     * @see classes/ObjectModelCore::add()
     *
     * @param bool $null_values
     * @param bool $autodate
     *
     * @return bool Insertion result
     */
    public function add($autodate = \true, $null_values = \false)
    {
    }
    /**
     * Get all available price ranges.
     *
     * @param int $id_carrier Carrier identifier
     *
     * @return array|false All ranges for this carrier, or false on error
     */
    public static function getRanges($id_carrier)
    {
    }
    /**
     * Check if a range exists for delimiter1 and delimiter2 by id_carrier or id_reference
     *
     * @param int|null $id_carrier Carrier identifier
     * @param float $delimiter1
     * @param float $delimiter2
     * @param int|null $id_reference Carrier reference is the initial Carrier identifier (optional)
     *
     * @return int|false Total of matching ranges, or false on error
     */
    public static function rangeExist($id_carrier, $delimiter1, $delimiter2, $id_reference = \null)
    {
    }
    /**
     * Check if a range overlaps another range for this carrier
     *
     * @param int $id_carrier Carrier identifier
     * @param float $delimiter1
     * @param float $delimiter2
     * @param int|null $id_rang RangePrice identifier (optional)
     *
     * @return int|false Total of overlapping ranges, or false on error
     */
    public static function isOverlapping($id_carrier, $delimiter1, $delimiter2, $id_rang = \null)
    {
    }
}
