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
    public function canonicalRedirection($canonicalURL = '')
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCanonicalURL()
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
     * overrides layout if category is not visible.
     *
     * @return bool|string
     */
    public function getLayout()
    {
    }
    protected function getAjaxProductSearchVariables()
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
     * @return CategoryProductSearchProvider
     */
    protected function getDefaultProductSearchProvider()
    {
    }
    protected function getTemplateVarCategory()
    {
    }
    protected function getTemplateVarSubCategories()
    {
    }
    protected function getImage($object, $id_image)
    {
    }
    public function getBreadcrumbLinks()
    {
    }
    /**
     * @return Category
     */
    public function getCategory()
    {
    }
    public function getTemplateVarPage()
    {
    }
    public function getListingLabel()
    {
    }
}
