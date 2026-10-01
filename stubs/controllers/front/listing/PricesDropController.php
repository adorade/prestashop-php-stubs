<?php

class PricesDropControllerCore extends \ProductListingFrontController
{
    /** @var string */
    public $php_self = 'prices-drop';
    /**
     * Returns canonical URL for prices-drop page
     *
     * @return string
     */
    public function getCanonicalURL(): string
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
     * @return \PrestaShop\PrestaShop\Adapter\PricesDrop\PricesDropProductSearchProvider
     */
    protected function getDefaultProductSearchProvider(): \PrestaShop\PrestaShop\Adapter\PricesDrop\PricesDropProductSearchProvider
    {
    }
    public function getListingLabel(): string
    {
    }
    public function getBreadcrumbLinks(): array
    {
    }
}
