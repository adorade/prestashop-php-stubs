<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Class FeatureCore.
 */
class FeatureCore extends \ObjectModel
{
    /** @var string|array<int, string> Name */
    public $name;
    /** @var int */
    public $position;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'feature', 'primary' => 'id_feature', 'multilang' => \true, 'fields' => [
        'position' => ['type' => self::TYPE_INT, 'validate' => 'isInt'],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => 128],
    ]];
    protected $webserviceParameters = ['objectsNodeName' => 'product_features', 'objectNodeName' => 'product_feature', 'fields' => []];
    /**
     * Get a feature data for a given id_feature and id_lang.
     *
     * @param int $idLang Language ID
     * @param int $idFeature Feature ID
     *
     * @return array Array with feature's data
     */
    public static function getFeature($idLang, $idFeature)
    {
    }
    /**
     * Get all features for a given language.
     *
     * @param int $idLang Language id
     *
     * @return array Multiple arrays with feature's data
     */
    public static function getFeatures($idLang, $withShop = \true)
    {
    }
    /**
     * Delete several objects from database.
     *
     * @param array $selection Array with items to delete
     *
     * @return bool Deletion result
     */
    public function deleteSelection(array $selection)
    {
    }
    /**
     * Adds current Feature as a new Object to the database.
     *
     * @param bool $autoDate Automatically set `date_upd` and `date_add` columns
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Feature has been successfully added
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    /**
     * Updates the current Feature in the database.
     *
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the Feature has been successfully updated
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Deletes current Feature from the database.
     *
     * @return bool `true` if delete was successful
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    /**
     * Count number of features for a given language.
     *
     * @param int $idLang Language id
     *
     * @return int Number of feature
     */
    public static function nbFeatures($idLang)
    {
    }
    /**
     * Create a feature from import.
     *
     * @param string $name Feature name
     * @param bool|int $position Feature position
     *
     * @return int Feature ID
     */
    public static function addFeatureImport($name, $position = \false)
    {
    }
    /**
     * This metohd is allow to know if a feature is used or active.
     *
     * @return bool
     */
    public static function isFeatureActive()
    {
    }
    /**
     * Move a feature.
     *
     * @param bool $way Up (1)  or Down (0)
     * @param int|null $position
     * @param int|null $idFeature
     *
     * @return bool Update result
     */
    public function updatePosition($way, $position, $idFeature = \null)
    {
    }
    /**
     * Reorder feature position
     * Call it after deleting a feature.
     *
     * @return bool $return
     */
    public static function cleanPositions()
    {
    }
    /**
     * getHigherPosition.
     *
     * Get the higher feature position
     *
     * @return int $position
     */
    public static function getHigherPosition()
    {
    }
}
