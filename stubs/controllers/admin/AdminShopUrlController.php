<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
    /**
     * AdminController::initContent() override.
     *
     * @see AdminController::initContent()
     */
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
