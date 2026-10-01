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
