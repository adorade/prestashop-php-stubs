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
 * Class FeatureValueCore.
 */
class FeatureValueCore extends \ObjectModel
{
    /** @var int Group id which attribute belongs */
    public $id_feature;
    /** @var string|array Name */
    public $value;
    /** @var bool Custom */
    public $custom = \false;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'feature_value', 'primary' => 'id_feature_value', 'multilang' => \true, 'fields' => [
        'id_feature' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true],
        'custom' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        /* Lang fields */
        'value' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => 255],
    ]];
    protected $webserviceParameters = ['objectsNodeName' => 'product_feature_values', 'objectNodeName' => 'product_feature_value', 'fields' => ['id_feature' => ['xlink_resource' => 'product_features']]];
    /**
     * Get all values for a given feature.
     *
     * @param int $idFeature Feature id
     *
     * @return array Array with feature's values
     */
    public static function getFeatureValues($idFeature)
    {
    }
    /**
     * Get all values for a given feature and language.
     *
     * @param int $idLang Language id
     * @param int $idFeature Feature id
     *
     * @return array Array with feature's values
     */
    public static function getFeatureValuesWithLang($idLang, $idFeature, $custom = \false)
    {
    }
    /**
     * Get all language for a given value.
     *
     * @param int $idFeatureValue Feature value id
     *
     * @return array Array with value's languages
     */
    public static function getFeatureValueLang($idFeatureValue)
    {
    }
    /**
     * Select the good lang in tab.
     *
     * @param array $lang Array with all language
     * @param int $idLang Language id
     *
     * @return string String value name selected
     */
    public static function selectLang($lang, $idLang)
    {
    }
    /**
     * Add FeatureValue from import.
     *
     * @param int $idFeature
     * @param string $value
     * @param int|null $idProduct
     * @param int|null $idLang
     * @param bool $custom
     *
     * @return int
     */
    public static function addFeatureValueImport($idFeature, $value, $idProduct = \null, $idLang = \null, $custom = \false)
    {
    }
    /**
     * Adds current FeatureValue as a new Object to the database.
     *
     * @param bool $autoDate Automatically set `date_upd` and `date_add` columns
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the FeatureValue has been successfully added
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function add($autoDate = \true, $nullValues = \false)
    {
    }
    /**
     * Updates the current FeatureValue in the database.
     *
     * @param bool $nullValues Whether we want to use NULL values instead of empty quotes values
     *
     * @return bool Indicates whether the FeatureValue has been successfully updated
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update($nullValues = \false)
    {
    }
    /**
     * Deletes current FeatureValue from the database.
     *
     * @return bool `true` if delete was successful
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
}
