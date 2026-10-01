<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
