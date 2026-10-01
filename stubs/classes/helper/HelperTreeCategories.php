<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class HelperTreeCategoriesCore extends \TreeCore
{
    public const DEFAULT_TEMPLATE = 'tree_categories.tpl';
    public const DEFAULT_NODE_FOLDER_TEMPLATE = 'tree_node_folder_radio.tpl';
    public const DEFAULT_NODE_ITEM_TEMPLATE = 'tree_node_item_radio.tpl';
    public function __construct($id, $title = \null, $root_category = \null, $lang = \null, $use_shop_restriction = \true)
    {
    }
    public function getData()
    {
    }
    public function setChildrenOnly($value)
    {
    }
    public function setFullTree($value)
    {
    }
    public function getFullTree()
    {
    }
    public function setDisabledCategories($value)
    {
    }
    public function getDisabledCategories()
    {
    }
    public function setInputName($value)
    {
    }
    public function getInputName()
    {
    }
    public function setLang($value)
    {
    }
    public function getLang()
    {
    }
    public function getNodeFolderTemplate()
    {
    }
    public function getNodeItemTemplate()
    {
    }
    public function setRootCategory($value)
    {
    }
    public function getRootCategory()
    {
    }
    /**
     * @param array<int> $value
     *
     * @return self
     *
     * @throws PrestaShopException
     */
    public function setSelectedCategories($value)
    {
    }
    public function getSelectedCategories()
    {
    }
    public function setShop($value)
    {
    }
    public function getShop()
    {
    }
    public function getTemplate()
    {
    }
    public function setUseCheckBox($value)
    {
    }
    public function setUseSearch($value)
    {
    }
    public function setUseShopRestriction($value)
    {
    }
    public function useCheckBox()
    {
    }
    public function useSearch()
    {
    }
    public function useShopRestriction()
    {
    }
    public function render($data = \null)
    {
    }
    /* Override */
    public function renderNodes($data = \null)
    {
    }
}
