<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Class DateRangeCore.
 */
class DateRangeCore extends \ObjectModel
{
    /** @var string */
    public $time_start;
    /** @var string */
    public $time_end;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'date_range', 'primary' => 'id_date_range', 'fields' => ['time_start' => ['type' => self::TYPE_DATE, 'validate' => 'isDate', 'required' => \true], 'time_end' => ['type' => self::TYPE_DATE, 'validate' => 'isDate', 'required' => \true]]];
    /**
     * Get current range.
     *
     * @return mixed
     */
    public static function getCurrentRange()
    {
    }
}
