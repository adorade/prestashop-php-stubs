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
 * @property ShopUrl|null $object
 */
class AdminShopUrlControllerCore extends \AdminController
{
    /**
     * @var int
     */
    public $id_shop;
    /**
     * @var bool
     */
    public $redirect_shop_url;
    public function __construct()
    {
    }
    public function viewAccess($disable = \false)
    {
    }
    public function renderList()
    {
    }
    /**
     * Returns a list of URLs that are selected as main ones for some store.
     *
     * @return array of URLs that are selected as main
     */
    protected function getUnremovableUrls()
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
    public function initPageHeaderToolbar()
    {
    }
    public function initToolbar()
    {
    }
    public function initContent()
    {
    }
    public function postProcess()
    {
    }
    public function processSave()
    {
    }
    public function processAdd()
    {
    }
    public function processUpdate()
    {
    }
    /**
     * @param ShopUrl $object
     *
     * @return void|bool
     */
    protected function afterUpdate($object)
    {
    }
    /**
     * @param string $token
     * @param int $id
     * @param string $name
     *
     * @return mixed
     */
    public function displayDeleteLink($token, $id, $name = \null)
    {
    }
}
