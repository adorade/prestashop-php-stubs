<?php

namespace PrestaShop\PrestaShop\Adapter\Feature;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This class will provide data from DB / ORM about Feature.
 */
class FeatureDataProvider
{
    /**
     * Get all features for a given language.
     *
     * @param int $id_lang Language id
     * @param bool $with_shop
     *
     * @return array Multiple arrays with feature's data
     */
    public static function getFeatures($id_lang, $with_shop = true)
    {
    }
    /**
     * Get all values for a given feature and language.
     *
     * @param int $id_lang Language id
     * @param int $id_feature Feature id
     * @param bool $custom
     *
     * @return array Array with feature's values
     */
    public static function getFeatureValuesWithLang($id_lang, $id_feature, $custom = false)
    {
    }
    /**
     * Get all language for a given value.
     *
     * @param int $id_feature_value Feature value id
     *
     * @return array Array with value's languages
     */
    public static function getFeatureValueLang($id_feature_value)
    {
    }
}
