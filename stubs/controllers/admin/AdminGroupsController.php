<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * @property Group $object
 */
class AdminGroupsControllerCore extends \AdminController
{
    public function __construct()
    {
    }
    public function setMedia($isNewTheme = \false)
    {
    }
    public function initToolbar()
    {
    }
    public function initPageHeaderToolbar()
    {
    }
    public function initProcess()
    {
    }
    public function postProcess(): void
    {
    }
    /**
     * @return string|void
     */
    public function renderView()
    {
    }
    protected function renderCustomersList(\Group $group)
    {
    }
    public function printOptinIcon($value, $customer)
    {
    }
    /**
     * @return string|void
     *
     * @throws PrestaShopException
     * @throws SmartyException
     */
    public function renderForm()
    {
    }
    protected function formatCategoryDiscountList(int $id_group)
    {
    }
    public function formatModuleListAuth($id_group)
    {
    }
    public function processSave()
    {
    }
    protected function validateDiscount($reduction)
    {
    }
    public function ajaxProcessAddCategoryReduction()
    {
    }
    /**
     * Update (or create) restrictions for modules by group.
     */
    protected function updateRestrictions()
    {
    }
    protected function updateCategoryReduction()
    {
    }
    /**
     * Toggle show prices flag.
     */
    public function processChangeShowPricesVal()
    {
    }
    public function renderList()
    {
    }
    public function displayEditLink($token, $id)
    {
    }
    /**
     * AdminController::initContent() override.
     *
     * @see AdminController::initContent()
     */
    public function initContent()
    {
    }
}
