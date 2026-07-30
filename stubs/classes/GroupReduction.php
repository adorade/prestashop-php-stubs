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
class GroupReductionCore extends \ObjectModel
{
    public $id_group;
    public $id_category;
    public $reduction;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'group_reduction', 'primary' => 'id_group_reduction', 'fields' => ['id_group' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_category' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'reduction' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => \true]]];
    protected static $reduction_cache = [];
    public function add($autodate = \true, $null_values = \false)
    {
    }
    public function update($null_values = \false)
    {
    }
    public function delete()
    {
    }
    protected function _clearCache()
    {
    }
    protected function _setCache()
    {
    }
    protected function _updateCache()
    {
    }
    public static function getGroupReductions($id_group, $id_lang)
    {
    }
    public static function getValueForProduct($id_product, $id_group)
    {
    }
    public static function doesExist($id_group, $id_category)
    {
    }
    public static function getGroupsByCategoryId($id_category)
    {
    }
    public static function getGroupsReductionByCategoryId($id_category)
    {
    }
    public static function setProductReduction($id_product, $id_group = \null, $id_category = \null, $reduction = \null)
    {
    }
    public static function deleteProductReduction($id_product)
    {
    }
    public static function duplicateReduction($id_product_old, $id_product)
    {
    }
    public static function deleteCategory($id_category)
    {
    }
    /**
     * Reset static cache (mainly for test environment)
     */
    public static function resetStaticCache()
    {
    }
}
