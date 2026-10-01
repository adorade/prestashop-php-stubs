<?php

class NewProductsControllerCore extends \ProductListingFrontController
{
    /** @var string */
    public $php_self = 'new-products';
    public function getCanonicalURL(): string
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
     * @return \PrestaShop\PrestaShop\Adapter\NewProducts\NewProductsProductSearchProvider
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
