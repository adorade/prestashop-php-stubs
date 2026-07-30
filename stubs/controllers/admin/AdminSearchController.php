<?php

class AdminSearchControllerCore extends \AdminController
{
    public const TOKEN_CHECK_START_POS = 34;
    public const TOKEN_CHECK_LENGTH = 8;
    /**
     * @var string
     */
    public $query;
    public function __construct()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function init()
    {
    }
    public function getTabSlug()
    {
    }
    public function postProcess()
    {
    }
    public function searchIP()
    {
    }
    /**
     * Search a specific string in the products and categories.
     */
    public function searchCatalog()
    {
    }
    /**
     * Search a specific name in the customers.
     */
    public function searchCustomer()
    {
    }
    public function searchModule()
    {
    }
    /**
     * Search a feature in all store.
     */
    public function searchFeatures()
    {
    }
    protected function initOrderList()
    {
    }
    protected function initCustomerList()
    {
    }
    protected function initProductList()
    {
    }
    public function setMedia($isNewTheme = \false)
    {
    }
    /* Override because we don't want any buttons */
    public function initToolbar()
    {
    }
    public function initToolbarTitle()
    {
    }
    public function renderView()
    {
    }
    protected function getSearchPanels(string $searchedExpression): void
    {
    }
    /**
     * Check if key is present in array, is countable and has data.
     *
     * @param array $array Array
     * @param string $key Key
     *
     * @return bool
     */
    protected function isCountableAndNotEmpty(array $array, $key)
    {
    }
    /**
     * Request triggering the search indexation.
     *
     * Kept as GET request for backward compatibility purpose, but should be modified as POST when migrated.
     * NOTE the token is different for that method, check the method checkToken() for more details.
     */
    public function displayAjaxSearchCron()
    {
    }
    /**
     * Check if a task is a cron task
     *
     * @return bool
     */
    protected function isCronTask()
    {
    }
}
