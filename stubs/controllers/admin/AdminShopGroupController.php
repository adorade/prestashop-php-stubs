<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * @property ShopGroup $object
 */
class AdminShopGroupControllerCore extends \AdminController
{
    public function __construct()
    {
    }
    public function viewAccess($disable = \false)
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
    /**
     * @return string|void
     *
     * @throws SmartyException
     */
    public function renderForm()
    {
    }
    public function getList($id_lang, $order_by = \null, $order_way = \null, $start = 0, $limit = \null, $id_lang_shop = \false)
    {
    }
    public function postProcess()
    {
    }
    public function beforeUpdateOptions()
    {
    }
    /**
     * @param ShopGroup $new_shop_group
     *
     * @return bool|void
     */
    protected function afterAdd($new_shop_group)
    {
    }
    /**
     * @param ShopGroup $new_shop_group
     *
     * @return bool|void
     */
    protected function afterUpdate($new_shop_group)
    {
    }
    /**
     * @return string|void
     */
    public function renderOptions()
    {
    }
}
