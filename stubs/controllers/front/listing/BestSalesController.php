<?php

class BestSalesControllerCore extends \ProductListingFrontController
{
    /** @var string */
    public $php_self = 'best-sales';
    public function getCanonicalURL(): string
    {
    }
    /**
     * Initializes controller.
     *
     * @see FrontController::init()
     *
     * @throws PrestaShopException
     */
    public function init()
    {
    }
    /**
     * {@inheritdoc}
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
     * @return \PrestaShop\PrestaShop\Adapter\BestSales\BestSalesProductSearchProvider
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
