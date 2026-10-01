<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * @property TaxRulesGroup $object
 */
class AdminTaxRulesGroupControllerCore extends \AdminController
{
    public $tax_rule;
    public $selected_countries = [];
    public $selected_states = [];
    public $errors_tax_rule;
    public function __construct()
    {
    }
    public function initPageHeaderToolbar()
    {
    }
    public function renderList()
    {
    }
    public function initRulesList($id_group)
    {
    }
    /**
     * @return string|void
     *
     * @throws SmartyException
     */
    public function renderForm()
    {
    }
    public function initRuleForm()
    {
    }
    public function initProcess()
    {
    }
    protected function processCreateRule()
    {
    }
    protected function processBulkDeleteTaxRules()
    {
    }
    protected function processDeleteTaxRule()
    {
    }
    public function displayAjaxUpdateTaxRule()
    {
    }
    protected function deleteTaxRule(array $id_tax_rule_list)
    {
    }
    /**
     * Check if the tax rule could be added in the database.
     *
     * @param TaxRule $tr
     *
     * @return array
     */
    protected function validateTaxRule(\TaxRule $tr)
    {
    }
    /**
     * @param TaxRulesGroup $object
     *
     * @return TaxRulesGroup
     */
    protected function updateTaxRulesGroup(\TaxRulesGroup $object)
    {
    }
}
