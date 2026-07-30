<?php

class SupplierControllerCore extends \ProductListingFrontController
{
    /**
     * @var string
     */
    public $php_self = 'supplier';
    /** @var Supplier|null */
    protected $supplier;
    protected $label;
    public function canonicalRedirection($canonicalURL = '')
    {
    }
    public function getCanonicalURL(): string
    {
    }
    /**
     * Initialize supplier controller.
     *
     * @see FrontController::init()
     */
    public function init()
    {
    }
    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
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
     * @return SupplierProductSearchProvider
     */
    protected function getDefaultProductSearchProvider()
    {
    }
    /**
     * Assign template vars if displaying one supplier.
     */
    protected function assignSupplier()
    {
    }
    /**
     * Assign template vars if displaying the supplier list.
     */
    protected function assignAll()
    {
    }
    public function getTemplateVarSuppliers()
    {
    }
    public function getListingLabel()
    {
    }
    public function getBreadcrumbLinks()
    {
    }
    public function getTemplateVarPage()
    {
    }
    /**
     * @return Supplier
     */
    public function getSupplier()
    {
    }
}
