<?php

class ManufacturerControllerCore extends \ProductListingFrontController
{
    /** @var string */
    public $php_self = 'manufacturer';
    /** @var Manufacturer|null */
    protected $manufacturer;
    protected $label;
    public function canonicalRedirection($canonicalURL = '')
    {
    }
    public function getCanonicalURL(): string
    {
    }
    /**
     * Initialize manufaturer controller.
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
     *
     * @throws \PrestaShop\PrestaShop\Core\Product\Search\Exception\InvalidSortOrderDirectionException
     */
    protected function getProductSearchQuery()
    {
    }
    /**
     * @return ManufacturerProductSearchProvider
     */
    protected function getDefaultProductSearchProvider()
    {
    }
    /**
     * Assign template vars if displaying one manufacturer.
     */
    protected function assignManufacturer()
    {
    }
    /**
     * Assign template vars if displaying the manufacturer list.
     */
    protected function assignAll()
    {
    }
    public function getTemplateVarManufacturers()
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
     * @return Manufacturer
     */
    public function getManufacturer()
    {
    }
}
