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
    protected function renderCustomersList($group)
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
    protected function formatCategoryDiscountList($id_group)
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
