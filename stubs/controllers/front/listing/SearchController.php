<?php

class SearchControllerCore extends \ProductListingFrontController
{
    /** @var string */
    public $php_self = 'search';
    public $instant_search;
    public $ajax_search;
    protected $search_string;
    protected $search_tag;
    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    public function init()
    {
    }
    public function getCanonicalURL(): string
    {
    }
    /**
     * Ensure that no search results page is indexed by search engines.
     */
    public function getTemplateVarPage()
    {
    }
    /**
     * Performs the search.
     */
    public function initContent()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery
     */
    protected function getProductSearchQuery()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Adapter\Search\SearchProductSearchProvider
     */
    protected function getDefaultProductSearchProvider()
    {
    }
    public function getListingLabel()
    {
    }
    public function getBreadcrumbLinks()
    {
    }
}
