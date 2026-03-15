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
     * @return ProductSearchQuery
     */
    protected function getProductSearchQuery()
    {
    }
    /**
     * @return NewProductsProductSearchProvider
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
