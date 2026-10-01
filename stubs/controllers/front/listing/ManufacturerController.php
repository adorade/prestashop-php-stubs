<?php

class ManufacturerControllerCore extends \ProductListingFrontController
{
    /** @var string */
    public $php_self = 'manufacturer';
    /** @var Manufacturer|null */
    protected $manufacturer;
    protected $label;
    /** @var \PrestaShop\PrestaShop\Adapter\Presenter\Manufacturer\ManufacturerPresenter */
    protected $manufacturerPresenter;
    public function canonicalRedirection(string $canonicalURL = ''): void
    {
    }
    /**
     * Returns canonical URL for current manufacturer or a manufacturer list
     *
     * @return string
     */
    public function getCanonicalURL(): string
    {
    }
    /**
     * Initialize manufaturer controller.
     *
     * @see FrontController::init()
     */
    public function init(): void
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
     *
     * @throws PrestaShop\PrestaShop\Core\Product\Search\Exception\InvalidSortOrderDirectionException
     */
    protected function getProductSearchQuery(): \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery
    {
    }
    /**
     * Default product search provider used if no filtering module stood up for the job
     *
     * @return \PrestaShop\PrestaShop\Adapter\Manufacturer\ManufacturerProductSearchProvider
     */
    protected function getDefaultProductSearchProvider(): \PrestaShop\PrestaShop\Adapter\Manufacturer\ManufacturerProductSearchProvider
    {
    }
    /**
     * Assign template vars if displaying one manufacturer.
     */
    protected function assignManufacturer(): void
    {
    }
    /**
     * Assign template vars if displaying the manufacturer list.
     */
    protected function assignAll(): void
    {
    }
    public function getTemplateVarManufacturers(): array
    {
    }
    public function getListingLabel(): string
    {
    }
    public function getBreadcrumbLinks(): array
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
     * @return Manufacturer|null
     */
    public function getManufacturer(): ?\Manufacturer
    {
    }
}
