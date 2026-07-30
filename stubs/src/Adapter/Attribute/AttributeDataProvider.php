<?php

namespace PrestaShop\PrestaShop\Adapter\Attribute;

/**
 * This class will provide data from DB / ORM about Attributes.
 */
class AttributeDataProvider
{
    /**
     * Get all attributes for a given language.
     *
     * @param int $id_lang Language id
     * @param bool $not_null Get only not null fields if true
     *
     * @return array Attributes
     */
    public static function getAttributes($id_lang, $not_null = false)
    {
    }
    /**
     * Get all attributes ids for a given group.
     *
     * @param int $id_group Attribute group id
     * @param bool $not_null Get only not null fields if true
     *
     * @return array Attributes
     */
    public static function getAttributeIdsByGroup($id_group, $not_null = false)
    {
    }
    /**
     * Get combination for a product.
     *
     * @param int $idProduct
     *
     * @return array|bool
     */
    public function getProductCombinations($idProduct)
    {
    }
    /**
     * Get combination images ids.
     *
     * @param int $idAttribute
     *
     * @return array
     */
    public function getImages($idAttribute)
    {
    }
}
