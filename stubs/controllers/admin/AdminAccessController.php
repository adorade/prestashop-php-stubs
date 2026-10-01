<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * @property Profile $object
 */
class AdminAccessControllerCore extends \AdminController
{
    /** @var array : Black list of id_tab that do not have access */
    public $accesses_black_list = [];
    public function __construct()
    {
    }
    /**
     * AdminController::renderForm() override.
     *
     * @see AdminController::renderForm()
     */
    public function renderForm()
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
    public function initToolbarTitle()
    {
    }
    public function initPageHeaderToolbar()
    {
    }
    public function ajaxProcessUpdateAccess()
    {
    }
    public function ajaxProcessUpdateModuleAccess()
    {
    }
    /**
     * Get the current profile id.
     *
     * @return int the $_GET['profile'] if valid, else 1 (the first profile id)
     */
    public function getCurrentProfileId()
    {
    }
    /**
     * @param array $a module data
     * @param array $b module data
     *
     * @return int
     */
    protected function sortModuleByName(array $a, array $b)
    {
    }
    /**
     * return human readable Tabs hierarchy for display.
     */
    protected function displayTabs(array $tabs)
    {
    }
    protected function getChildrenTab(array &$tabs, int $id_parent = 0)
    {
    }
}
