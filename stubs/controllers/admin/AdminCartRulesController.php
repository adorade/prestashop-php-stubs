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
 * @property CartRule $object
 */
class AdminCartRulesControllerCore extends \AdminController
{
    public function __construct()
    {
    }
    public function ajaxProcessLoadCartRules()
    {
    }
    public function setMedia($isNewTheme = \false)
    {
    }
    public function initPageHeaderToolbar()
    {
    }
    public function postProcess()
    {
    }
    public function processDelete()
    {
    }
    /**
     * @param $current_object
     *
     * @return bool|void
     *
     * @throws PrestaShopDatabaseException
     */
    protected function afterUpdate($current_object)
    {
    }
    public function processAdd()
    {
    }
    /**
     * @TODO Move this function into CartRule
     *
     * @param ObjectModel $currentObject
     *
     * @return bool|void
     *
     * @throws PrestaShopDatabaseException
     */
    protected function afterAdd($currentObject)
    {
    }
    /**
     * Retrieve the cart rule product rule groups in the POST data
     * if available, and in the database if there is none.
     *
     * @param CartRule $cart_rule
     *
     * @return array
     */
    public function getProductRuleGroupsDisplay($cart_rule)
    {
    }
    /* Return the form for a single cart rule group either with or without product_rules set up */
    public function getProductRuleGroupDisplay($product_rule_group_id, $product_rule_group_quantity = 1, $product_rules = \null)
    {
    }
    public function getProductRuleDisplay($product_rule_group_id, $product_rule_id, $product_rule_type, $selected = [])
    {
    }
    public function populateCategories(array $flatCategories, array $currentCategoryTree, string $currentPath = ''): array
    {
    }
    public function ajaxProcess()
    {
    }
    protected function searchProducts($search)
    {
    }
    public function ajaxProcessSearchProducts()
    {
    }
    public function renderForm()
    {
    }
    public function displayAjaxSearchCartRuleVouchers()
    {
    }
    /**
     * For the listing, Override the method displayDeleteLink for the HelperList
     * That allows to have links with all characters (like < & >)
     *
     * @param string $token
     * @param string $id
     * @param string|null $name
     *
     * @return string
     */
    public function displayDeleteLink(string $token, string $id, ?string $name = \null): string
    {
    }
}
