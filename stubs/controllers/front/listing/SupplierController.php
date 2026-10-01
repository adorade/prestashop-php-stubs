<?php

class SupplierControllerCore extends \ProductListingFrontController
{
    /** @var string */
    public $php_self = 'supplier';
    /** @var Supplier|null */
    protected $supplier;
    /** @var \PrestaShop\PrestaShop\Adapter\Presenter\Supplier\SupplierPresenter */
    protected $supplierPresenter;
    public function canonicalRedirection(string $canonicalURL = ''): void
    {
    }
    /**
     * Returns canonical URL for current supplier or a supplier list
     *
     * @return string
     */
    public function getCanonicalURL(): string
    {
    }
    /**
     * Initialize supplier controller.
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
     */
    protected function getProductSearchQuery(): \PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery
    {
    }
    /**
     * Default product search provider used if no filtering module stood up for the job
     *
     * @return \PrestaShop\PrestaShop\Adapter\Supplier\SupplierProductSearchProvider
     */
    protected function getDefaultProductSearchProvider(): \PrestaShop\PrestaShop\Adapter\Supplier\SupplierProductSearchProvider
    {
    }
    /**
     * Assign template vars if displaying one supplier.
     */
    protected function assignSupplier(): void
    {
    }
    /**
     * Assign template vars if displaying the supplier list.
     */
    protected function assignAll(): void
    {
    }
    public function getTemplateVarSuppliers(): array
    {
    }
    public function getListingLabel(): string
    {
    }
    public function getBreadcrumbLinks(): array
    {
    }
    /**
     * Generates structured data this page, depending on if we are displaying a supplier or a list of suppliers.
     *
     * @return array
     */
    public function getStructuredData(): array
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
     * @return Supplier|null
     */
    public function getSupplier(): ?\Supplier
    {
    }
}
