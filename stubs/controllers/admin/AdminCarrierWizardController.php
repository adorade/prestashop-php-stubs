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
 * @property Carrier $object
 */
class AdminCarrierWizardControllerCore extends \AdminController
{
    protected $wizard_access;
    /**
     * @var Context
     */
    public $old_context;
    /**
     * @var int
     */
    public $type_context;
    /**
     * @var array<string, string|array<array<string, string>>>
     */
    public $wizard_steps;
    public function __construct()
    {
    }
    public function setMedia($isNewTheme = \false)
    {
    }
    public function initWizard()
    {
    }
    /**
     * @return string|void
     *
     * @throws SmartyException
     */
    public function renderView()
    {
    }
    public function initBreadcrumbs($tab_id = \null, $tabs = \null)
    {
    }
    public function initPageHeaderToolbar()
    {
    }
    public function renderStepOne($carrier)
    {
    }
    public function renderStepTwo($carrier)
    {
    }
    public function renderStepThree($carrier)
    {
    }
    /**
     * @param Carrier $carrier
     *
     * @return string
     */
    public function renderStepFour($carrier)
    {
    }
    public function renderStepFive($carrier)
    {
    }
    /**
     * @param Carrier $carrier
     * @param array $tpl_vars
     * @param array $fields_value
     */
    protected function getTplRangesVarsAndValues($carrier, &$tpl_vars, &$fields_value)
    {
    }
    public function renderGenericForm($fields_form, $fields_value, $tpl_vars = [])
    {
    }
    public function getStepOneFieldsValues($carrier)
    {
    }
    public function getStepTwoFieldsValues($carrier)
    {
    }
    public function getStepThreeFieldsValues($carrier)
    {
    }
    public function getStepFourFieldsValues($carrier)
    {
    }
    public function getStepFiveFieldsValues($carrier)
    {
    }
    public function ajaxProcessChangeRanges()
    {
    }
    protected function validateForm($die = \true)
    {
    }
    public function ajaxProcessValidateStep()
    {
    }
    public function processRanges($id_carrier)
    {
    }
    public function ajaxProcessUploadLogo()
    {
    }
    public function ajaxProcessFinishStep()
    {
    }
    protected function changeGroups($id_carrier, $delete = \true)
    {
    }
    public function changeZones($id)
    {
    }
    public function getValidationRules()
    {
    }
    public static function displayFieldName($field)
    {
    }
    public function duplicateLogo($new_id, $old_id)
    {
    }
    public function getActualCurrency()
    {
    }
}
