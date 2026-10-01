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
     * Initialize the controller.
     *
     * @see FrontController::init()
     */
    public function init(): void
    {
    }
    /**
     * Returns canonical URL for a search page with this term
     *
     * @return string
     */
    public function getCanonicalURL(): string
    {
    }
    /**
     * Initializes a set of commonly used variables related to the current page, available for use
     * in the template. @see FrontController::assignGeneralPurposeVariables for more information.
     *
     * @return array
     */
    public function getTemplateVarPage(): array
    {
    }
    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    public function initContent(): void
    {
    }
    /**
     * Gets the product search query for the controller. This is a set of information that
     * a filtering module or the default provider will use to fetch our products.
     *
     * @return \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery
     */
    protected function getProductSearchQuery(): \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery
    {
    }
    /**
     * Default product search provider used if no filtering module stood up for the job
     *
     * @return \PrestaShop\PrestaShop\Adapter\Search\SearchProductSearchProvider
     */
    protected function getDefaultProductSearchProvider(): \PrestaShop\PrestaShop\Adapter\Search\SearchProductSearchProvider
    {
    }
    public function getListingLabel(): string
    {
    }
    public function getBreadcrumbLinks(): array
    {
    }
}
