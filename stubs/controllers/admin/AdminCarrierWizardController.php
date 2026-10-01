<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
    protected function getTplRangesVarsAndValues(\Carrier $carrier, array &$tpl_vars, array &$fields_value)
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
    protected function validateForm(bool $die = \true)
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
    protected function changeGroups(int $id_carrier, bool $delete = \true)
    {
    }
    public function changeZones($id)
    {
    }
    public function getValidationRules()
    {
    }
    public function duplicateLogo($new_id, $old_id)
    {
    }
    public function getActualCurrency()
    {
    }
}
