<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Class ZoneCore.
 */
class ZoneCore extends \ObjectModel
{
    /** @var string Name */
    public $name;
    /** @var bool Zone status */
    public $active = \true;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'zone', 'primary' => 'id_zone', 'fields' => ['name' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => \true, 'size' => 64], 'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool']]];
    protected $webserviceParameters = [];
    /**
     * Get all available geographical zones.
     *
     * @param bool $active
     * @param bool $activeFirst
     *
     * @return array Zones
     */
    public static function getZones($active = \false, $activeFirst = \false)
    {
    }
    /**
     * Get a zone ID from its default language name.
     *
     * @param string $name
     *
     * @return int id_zone
     */
    public static function getIdByName($name)
    {
    }
    /**
     * Delete a zone.
     *
     * @return bool Deletion result
     */
    public function delete()
    {
    }
}
