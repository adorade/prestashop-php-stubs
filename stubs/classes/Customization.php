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
 * Class CustomizationCore.
 */
class CustomizationCore extends \ObjectModel
{
    /** @var int */
    public $id_product_attribute;
    /** @var int */
    public $id_address_delivery;
    /** @var int */
    public $id_cart;
    /** @var int */
    public $id_product;
    /** @var int */
    public $quantity;
    /** @var int */
    public $quantity_refunded;
    /** @var int */
    public $quantity_returned;
    /** @var bool */
    public $in_cart;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'customization', 'primary' => 'id_customization', 'fields' => [
        /* Classic fields */
        'id_product_attribute' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true],
        'id_address_delivery' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true],
        'id_cart' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true],
        'id_product' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true],
        'quantity' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true],
        'quantity_refunded' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true],
        'quantity_returned' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true],
        'in_cart' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => \true],
    ]];
    protected $webserviceParameters = ['fields' => ['id_address_delivery' => ['xlink_resource' => ['resourceName' => 'addresses']], 'id_cart' => ['xlink_resource' => ['resourceName' => 'carts']], 'id_product' => ['xlink_resource' => ['resourceName' => 'products']]], 'associations' => ['customized_data_text_fields' => ['resource' => 'customized_data_text_field', 'virtual_entity' => \true, 'fields' => ['id_customization_field' => ['required' => \true, 'xlink_resource' => 'product_customization_fields'], 'value' => []]], 'customized_data_images' => ['resource' => 'customized_data_image', 'virtual_entity' => \true, 'setter' => \false, 'fields' => ['id_customization_field' => ['xlink_resource' => 'product_customization_fields'], 'value' => []]]]];
    /**
     * Get returned Customizations.
     *
     * @param int $idOrder Order ID
     *
     * @return array|bool
     */
    public static function getReturnedCustomizations($idOrder)
    {
    }
    /**
     * Get ordered Customizations.
     *
     * @param int $idCart Cart ID
     *
     * @return array|bool Ordered Customizations
     *                    `false` if not found
     */
    public static function getOrderedCustomizations($idCart)
    {
    }
    /**
     * Get price of Customization.
     *
     * @param int $idCustomization Customization ID
     *
     * @return float|int Price of customization
     */
    public static function getCustomizationPrice($idCustomization)
    {
    }
    /**
     * Get weight of Customization.
     *
     * @param int $idCustomization Customization ID
     *
     * @return float|int Weight
     */
    public static function getCustomizationWeight($idCustomization)
    {
    }
    /**
     * Count Customization quantity by Product.
     *
     * @param array $customizations Customizations
     *
     * @return array Customization quantities by Product
     */
    public static function countCustomizationQuantityByProduct($customizations)
    {
    }
    /**
     * Get label.
     *
     * @param int $idCustomization Customization ID
     * @param int $idLang Language IOD
     * @param int|null $idShop Shop ID
     *
     * @return bool|false|string|null
     */
    public static function getLabel($idCustomization, $idLang, $idShop = \null)
    {
    }
    /**
     * Retrieve quantities from IDs.
     *
     * @param array $idsCustomizations Customization IDs
     *
     * @return array Quantities
     */
    public static function retrieveQuantitiesFromIds($idsCustomizations)
    {
    }
    /**
     * Count quantity by Cart.
     *
     * @param int $idCart Cart ID
     *
     * @return array
     */
    public static function countQuantityByCart($idCart)
    {
    }
    /**
     * This method is allow to know if a feature is used or active.
     *
     * @since 1.5.0.1
     *
     * @return bool
     */
    public static function isFeatureActive()
    {
    }
    /**
     * This method is allow to know if a Customization entity is currently used.
     *
     * @since 1.5.0.1
     *
     * @param string|null $table Name of table linked to entity
     * @param bool $hasActiveColumn True if the table has an active column
     *
     * @return bool
     */
    public static function isCurrentlyUsed($table = \null, $hasActiveColumn = \false)
    {
    }
    /**
     * Get customized text fields
     * (for webservice).
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getWsCustomizedDataTextFields()
    {
    }
    /**
     * Get customized images data
     * (for webservice).
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getWsCustomizedDataImages()
    {
    }
    /**
     * Set customized text fields
     * (for webservice).
     *
     * @param array $values
     *
     * @return bool
     */
    public function setWsCustomizedDataTextFields($values)
    {
    }
    /**
     * Delete the current context shops langs.
     *
     * @param int $idCustomizationField
     * @param int[] $shopList
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     */
    public static function deleteCustomizationFieldLangByShop($idCustomizationField, $shopList)
    {
    }
}
