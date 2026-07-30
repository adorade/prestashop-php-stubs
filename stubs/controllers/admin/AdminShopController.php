<?php

/**
 * @property Shop|null $object
 */
class AdminShopControllerCore extends \AdminController
{
    /** @var int */
    public $id_shop;
    /** @var int|null */
    public $id_shop_group;
    public function __construct()
    {
    }
    public function getTabSlug()
    {
    }
    public function viewAccess($disable = \false)
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
    public function renderList()
    {
    }
    public function displayAjaxGetCategoriesFromRootCategory()
    {
    }
    public function postProcess()
    {
    }
    /**
     * @return bool
     *
     * @throws PrestaShopException
     */
    public function processDelete()
    {
    }
    /**
     * @param Shop $new_shop
     *
     * @return ObjectModel|bool
     */
    protected function afterAdd($new_shop)
    {
    }
    /**
     * @param Shop $new_shop
     *
     * @return bool
     */
    protected function afterUpdate($new_shop)
    {
    }
    public function getList($id_lang, $order_by = \null, $order_way = \null, $start = 0, $limit = \null, $id_lang_shop = \false)
    {
    }
    /**
     * @return string|void
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     * @throws SmartyException
     */
    public function renderForm()
    {
    }
    /**
     * Object creation
     *
     * @return Shop|void
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function processAdd()
    {
    }
    public function displayEditLink($token, $id, $name = \null)
    {
    }
    public function initCategoriesAssociation($id_root = \null)
    {
    }
    public function ajaxProcessTree()
    {
    }
}
