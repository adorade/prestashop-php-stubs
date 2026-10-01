<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
