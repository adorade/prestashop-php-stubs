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
 * @property OrderState $object
 */
class AdminStatusesControllerCore extends \AdminController
{
    public function __construct()
    {
    }
    public function init()
    {
    }
    /**
     * init all variables to render the order status list.
     */
    protected function initOrderStatusList(): void
    {
    }
    /**
     * Init all variables to render the order status list.
     *
     * @deprecated Use `initOrderStatusList`
     */
    protected function initOrderStatutsList()
    {
    }
    /**
     * init all variables to render the order return list.
     */
    protected function initOrdersReturnsList()
    {
    }
    protected function initOrderReturnsForm()
    {
    }
    public function initPageHeaderToolbar()
    {
    }
    /**
     * Function used to render the list to display for this controller.
     */
    public function renderList()
    {
    }
    protected function getUnremovableStatuses()
    {
    }
    protected function checkFilterForOrdersReturnsList()
    {
    }
    public function renderForm()
    {
    }
    protected function renderOrderStatusForm()
    {
    }
    protected function renderOrderReturnsForm()
    {
    }
    protected function getTemplates()
    {
    }
    public function postProcess()
    {
    }
    protected function filterToField($key, $filter)
    {
    }
    protected function afterImageUpload()
    {
    }
    public function ajaxProcessSendEmailOrderState()
    {
    }
    public function ajaxProcessDeliveryOrderState()
    {
    }
    public function ajaxProcessInvoiceOrderState()
    {
    }
}
