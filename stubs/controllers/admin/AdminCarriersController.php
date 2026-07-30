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
class AdminCarriersControllerCore extends \AdminController
{
    /** @var string */
    protected $position_identifier = 'id_carrier';
    public function __construct()
    {
    }
    public function initToolbar()
    {
    }
    public function initPageHeaderToolbar()
    {
    }
    public function renderList()
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
    public function postProcess()
    {
    }
    public function processIsFree()
    {
    }
    /**
     * Overload the property $fields_value.
     *
     * @param object $obj
     */
    public function getFieldsValues($obj)
    {
    }
    /**
     * @param Carrier $object
     *
     * @return bool
     */
    protected function beforeDelete($object)
    {
    }
    protected function changeGroups($id_carrier, $delete = \true)
    {
    }
    public function changeZones($id)
    {
    }
    public function ajaxProcessUpdatePositions()
    {
    }
    public function displayEditLink($token, $id, $name = \null)
    {
    }
    public function displayDeleteLink($token, $id, $name = \null)
    {
    }
}
