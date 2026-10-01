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
 * Class SupplierCore.
 */
class SupplierCore extends \ObjectModel
{
    public $id;
    /** @var int supplier ID */
    public $id_supplier;
    /** @var string Name */
    public $name;
    /** @var string|array<int, string> A short description for the discount */
    public $description;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /** @var string Friendly URL */
    public $link_rewrite;
    /** @var string|array<int, string> Meta title */
    public $meta_title;
    /** @var string|array<int, string> Meta keywords */
    public $meta_keywords;
    /** @var string|array<int, string> Meta description */
    public $meta_description;
    /** @var bool active */
    public $active;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'supplier', 'primary' => 'id_supplier', 'multilang' => \true, 'fields' => [
        'name' => ['type' => self::TYPE_STRING, 'validate' => 'isCatalogName', 'required' => \true, 'size' => 64],
        'active' => ['type' => self::TYPE_BOOL],
        'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        /* Lang fields */
        'description' => ['type' => self::TYPE_HTML, 'lang' => \true, 'validate' => 'isCleanHtml', 'size' => 4194303],
        'meta_title' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
        'meta_description' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 512],
        'meta_keywords' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'size' => 255],
    ]];
    protected $webserviceParameters = ['fields' => ['link_rewrite' => ['sqlId' => 'link_rewrite']]];
    /**
     * SupplierCore constructor.
     *
     * @param int|null $id
     * @param int|null $idLang
     */
    public function __construct($id = \null, $idLang = \null)
    {
    }
    public function getLink()
    {
    }
    /**
     * Return suppliers.
     *
     * @return bool|array Suppliers
     */
    public static function getSuppliers($getNbProducts = \false, $idLang = 0, $active = \true, $p = \false, $n = \false, $allGroups = \false, $withProduct = \false)
    {
    }
    /**
     * List of suppliers.
     *
     * @param int $idLang Specify the id of the language used
     * @param string $format
     *
     * @return array Suppliers lite tree
     */
    public static function getLiteSuppliersList($idLang = \null, $format = 'default')
    {
    }
    /**
     * Return name from id.
     *
     * @param int $id_supplier Supplier ID
     *
     * @return string name
     */
    protected static $cache_name = [];
    public static function getNameById($idSupplier)
    {
    }
    public static function getIdByName($name)
    {
    }
    /**
     * @param int $idSupplier
     * @param int $idLang
     * @param int $p
     * @param int $n
     * @param string|null $orderBy
     * @param string|null $orderWay
     * @param bool $getTotal
     * @param bool $active
     * @param bool $activeCategory
     *
     * @return int|array|bool
     */
    public static function getProducts($idSupplier, $idLang, $p, $n, $orderBy = \null, $orderWay = \null, $getTotal = \false, $active = \true, $activeCategory = \true)
    {
    }
    /**
     * Get Products of this supplier (lite).
     *
     * @param int $idLang Language ID
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public function getProductsLite($idLang)
    {
    }
    /**
     * Tells if a supplier exists.
     *
     * @param int $idSupplier Supplier id
     *
     * @return bool
     */
    public static function supplierExists($idSupplier)
    {
    }
    /**
     * @see ObjectModel::delete()
     */
    public function delete()
    {
    }
    /**
     * Gets product informations.
     *
     * @param int $idSupplier
     * @param int $idProduct
     * @param int $idProductAttribute
     *
     * @return array
     *
     * @since 1.5.0
     */
    public static function getProductInformationsBySupplier($idSupplier, $idProduct, $idProductAttribute = 0)
    {
    }
}
