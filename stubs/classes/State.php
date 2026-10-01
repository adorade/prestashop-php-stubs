<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Class StateCore.
 */
class StateCore extends \ObjectModel
{
    /** @var int Country id which state belongs */
    public $id_country;
    /** @var int Zone id which state belongs */
    public $id_zone;
    /** @var string 2 letters iso code */
    public $iso_code;
    /** @var string Name */
    public $name;
    /** @var bool Status for delivery */
    public $active = \true;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'state', 'primary' => 'id_state', 'fields' => ['id_country' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_zone' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'iso_code' => ['type' => self::TYPE_STRING, 'validate' => 'isStateIsoCode', 'required' => \true, 'size' => 7], 'name' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => \true, 'size' => 80], 'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool']]];
    protected $webserviceParameters = ['fields' => ['id_zone' => ['xlink_resource' => 'zones'], 'id_country' => ['xlink_resource' => 'countries']]];
    public static function getStates($idLang = \false, $active = \false)
    {
    }
    /**
     * Get a state name with its ID.
     *
     * @param int $idState Country ID
     *
     * @return bool|string State name
     */
    public static function getNameById($idState)
    {
    }
    /**
     * Get State ID with its name.
     *
     * @param string $state State ID
     *
     * @return bool|int state id
     */
    public static function getIdByName($state)
    {
    }
    /**
     * Get a state id with its iso code.
     *
     * @param string $isoCode Iso code
     * @param int|null $idCountry
     *
     * @return int state id
     */
    public static function getIdByIso($isoCode, $idCountry = \null)
    {
    }
    /**
     * Delete a state only if is not in use.
     *
     * @return bool
     */
    public function delete()
    {
    }
    /**
     * Check if a state is used.
     *
     * @return bool
     */
    public function isUsed()
    {
    }
    /**
     * Returns the number of utilisation of a state.
     *
     * @return int count for this state
     */
    public function countUsed()
    {
    }
    /**
     * Get states by Country ID.
     *
     * @param int $idCountry Country ID
     * @param bool $active true if the state must be active
     * @param string $orderBy order by field
     * @param string $sort sort key (ASC or DESC)
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function getStatesByIdCountry($idCountry, $active = \false, $orderBy = \null, $sort = 'ASC')
    {
    }
    /**
     * Get Zone ID.
     *
     * @param int $idState State ID
     *
     * @return false|string|null
     */
    public static function getIdZone($idState)
    {
    }
    /**
     * @param array $idsStates State IDs
     * @param int $idZone Zone ID
     *
     * @return bool
     */
    public function affectZoneToSelection($idsStates, $idZone)
    {
    }
}
