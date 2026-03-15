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
 * @property AttributeGroup|ProductAttribute $object
 */
class AdminAttributesGroupsControllerCore extends \AdminController
{
    /** @var bool */
    public $bootstrap = \true;
    protected $id_attribute;
    /** @var string */
    protected $position_identifier = 'id_attribute_group';
    protected $attribute_name;
    public function __construct()
    {
    }
    /**
     * AdminController::renderList() override.
     *
     * @see AdminController::renderList()
     */
    public function renderList()
    {
    }
    /**
     * @return false|string|void
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function renderView()
    {
    }
    /**
     * AdminController::renderForm() override.
     *
     * @see AdminController::renderForm()
     *
     * @return string|void
     *
     * @throws SmartyException
     */
    public function renderForm()
    {
    }
    public function renderFormAttributes()
    {
    }
    /**
     * AdminController::init() override.
     *
     * @see AdminController::init()
     */
    public function init()
    {
    }
    /**
     * Override processAdd to change SaveAndStay button action.
     *
     * @see classes/AdminControllerCore::processUpdate()
     */
    public function processAdd()
    {
    }
    /**
     * Override processUpdate to change SaveAndStay button action.
     *
     * @see classes/AdminControllerCore::processUpdate()
     */
    public function processUpdate()
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
    public function initPageHeaderToolbar()
    {
    }
    public function initToolbar()
    {
    }
    public function initToolbarTitle()
    {
    }
    public function initProcess()
    {
    }
    protected function setTypeAttribute()
    {
    }
    public function processPosition()
    {
    }
    /**
     * Call the right method for creating or updating object.
     *
     * @return mixed
     */
    public function processSave()
    {
    }
    public function postProcess()
    {
    }
    /**
     * AdminController::getList() override.
     *
     * @see AdminController::getList()
     *
     * @param int $id_lang
     * @param string|null $order_by
     * @param string|null $order_way
     * @param int $start
     * @param int|null $limit
     * @param int|bool $id_lang_shop
     *
     * @throws PrestaShopException
     */
    public function getList($id_lang, $order_by = \null, $order_way = \null, $start = 0, $limit = \null, $id_lang_shop = \false)
    {
    }
    /**
     * Overrides parent to delete items from sublist.
     *
     * @return mixed
     */
    public function processBulkDelete()
    {
    }
    /* Modify group attribute position */
    public function ajaxProcessUpdateGroupsPositions()
    {
    }
    /* Modify attribute position */
    public function ajaxProcessUpdateAttributesPositions()
    {
    }
}
