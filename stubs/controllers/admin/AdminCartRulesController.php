<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
     * @param CartRule $current_object
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
     * @param CartRule $currentObject
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
    protected function searchProducts(string $searchString)
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
