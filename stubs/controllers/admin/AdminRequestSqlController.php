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
 * @property RequestSql $object
 */
class AdminRequestSqlControllerCore extends \AdminController
{
    /**
     * @var array : List of encoding type for a file
     */
    public static $encoding_file = [['value' => 1, 'name' => 'utf-8'], ['value' => 2, 'name' => 'iso-8859-1']];
    /**
     * @deprecated since 1.7.6, to be removed in the next minor
     */
    public function __construct()
    {
    }
    public function renderOptions()
    {
    }
    public function initToolbar()
    {
    }
    public function renderList()
    {
    }
    public function renderForm()
    {
    }
    public function postProcess()
    {
    }
    /**
     * method call when ajax request is made with the details row action.
     *
     * @see AdminController::postProcess()
     */
    public function ajaxProcess()
    {
    }
    /**
     * @return string|void
     *
     * @throws PrestaShopDatabaseException
     */
    public function renderView()
    {
    }
    public function _childValidation()
    {
    }
    /**
     * Display export action link.
     *
     * @param string $token
     * @param int $id
     *
     * @return string
     *
     * @throws Exception
     * @throws SmartyException
     */
    public function displayExportLink($token, $id)
    {
    }
    public function initProcess()
    {
    }
    public function initContent()
    {
    }
    public function initPageHeaderToolbar()
    {
    }
    /**
     * Generating an export file.
     */
    public function processExport($textDelimiter = '"')
    {
    }
    /**
     * Display all errors.
     *
     * @param array $e Array of errors
     */
    public function displayError($e)
    {
    }
}
