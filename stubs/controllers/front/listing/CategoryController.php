<?php

class CategoryControllerCore extends \ProductListingFrontController
{
    /** @var string Internal controller name */
    public $php_self = 'category';
    /** @var bool If set to false, customer cannot view the current category. */
    public $customer_access = \true;
    /** @var bool */
    protected $notFound = \false;
    /**
     * @var Category
     */
    protected $category;
    /** @var \PrestaShop\PrestaShop\Adapter\Presenter\Category\CategoryPresenter */
    protected $categoryPresenter;
    public function canonicalRedirection(string $canonicalURL = ''): void
    {
    }
    /**
     * Returns canonical URL for current category
     *
     * @return string
     */
    public function getCanonicalURL(): string
    {
    }
    /**
     * Initializes category controller.
     *
     * @see FrontController::init()
     *
     * @throws PrestaShopException
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
     * overrides layout if category is not visible.
     *
     * @return bool|string
     */
    public function getLayout(): bool|string
    {
    }
    protected function getAjaxProductSearchVariables(): array
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
     * @return \PrestaShop\PrestaShop\Adapter\Category\CategoryProductSearchProvider
     */
    protected function getDefaultProductSearchProvider(): \PrestaShop\PrestaShop\Adapter\Category\CategoryProductSearchProvider
    {
    }
    protected function getTemplateVarCategory(): \PrestaShop\PrestaShop\Adapter\Presenter\Category\CategoryLazyArray
    {
    }
    protected function getTemplateVarSubCategories(): array
    {
    }
    /**
     * @deprecated since 9.0.0 and will be removed in 10.0.0
     */
    protected function getImage(\Category $object, int $id_image)
    {
    }
    public function getBreadcrumbLinks(): array
    {
    }
    /**
     * @return Category
     */
    public function getCategory(): \Category
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
    public function getListingLabel(): string
    {
    }
}
