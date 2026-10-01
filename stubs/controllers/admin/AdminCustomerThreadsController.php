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
 * @property CustomerThread $object
 */
class AdminCustomerThreadsControllerCore extends \AdminController
{
    public function __construct()
    {
    }
    public function renderList()
    {
    }
    public function initToolbar()
    {
    }
    public function printOptinIcon($value, $customer)
    {
    }
    public function postProcess()
    {
    }
    public function initContent()
    {
    }
    protected function openUploadedFile(bool $forceDownload = \true)
    {
    }
    public function renderKpis()
    {
    }
    /**
     * @return string|void
     *
     * @throws PrestaShopException
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException
     */
    public function renderView()
    {
    }
    public function getTimeline($messages, $id_order)
    {
    }
    protected function displayMessage($message, $email = \false, $id_employee = \null)
    {
    }
    protected function displayButton($content)
    {
    }
    public function renderOptions()
    {
    }
    public function updateOptionPsSavImapOpt($value)
    {
    }
    public function ajaxProcessMarkAsRead()
    {
    }
    /**
     * Call the IMAP synchronization during an AJAX process.
     *
     * @throws PrestaShopException
     */
    public function ajaxProcessSyncImap()
    {
    }
    /**
     * Call the IMAP synchronization during the render process.
     */
    public function renderProcessSyncImap()
    {
    }
    /**
     * Imap synchronization method.
     *
     * @return array errors list
     */
    public function syncImap()
    {
    }
    protected function getEncoding($structure)
    {
    }
}
