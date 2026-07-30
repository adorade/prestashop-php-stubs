<?php

class ProductControllerCore extends \ProductPresentingFrontControllerCore
{
    /** @var string */
    public $php_self = 'product';
    /** @var int */
    protected $id_product;
    /** @var int|null */
    protected $id_product_attribute;
    /** @var Product */
    protected $product;
    /** @var Category|null */
    protected $category;
    protected $redirectionExtraExcludedKeys = ['id_product_attribute', 'rewrite'];
    /**
     * @var array
     */
    protected $combinations;
    protected $quantity_discounts;
    /**
     * @var array
     */
    protected $adminNotifications = [];
    /**
     * @var bool
     */
    protected $isQuickView = \false;
    /**
     * @var bool
     */
    protected $isPreview = \false;
    public function canonicalRedirection($canonical_url = '')
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCanonicalURL(): string
    {
    }
    /**
     * Initialize product controller.
     *
     * @see FrontController::init()
     */
    public function init()
    {
    }
    /**
     * Performs multiple checks and redirects user to error page if needed
     */
    public function checkPermissionsToViewProduct()
    {
    }
    /**
     * Loads related category to current visit. First it tries to get a category the user came from - it uses HTTP referer for this.
     * If no category is found (or it's invalid), we use product's default category.
     */
    public function initializeCategory()
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
     * Processes submitted customizations
     *
     * @see FrontController::postProcess()
     */
    public function postProcess()
    {
    }
    public function displayAjaxQuickview()
    {
    }
    public function displayAjaxRefresh()
    {
    }
    /**
     * Get minimal product quantity or minimal product combination quantity.
     *
     * @deprecated This method is deprecated since 1.7.5 and will be dropped in 1.8.0, please use getProductMinimalQuantity instead.
     *
     * @param array $product
     *
     * @return int
     */
    protected function getMinimalProductOrDeclinationQuantity($product)
    {
    }
    /**
     * Assign price and tax to the template.
     */
    protected function assignPriceAndTax()
    {
    }
    /**
     * Assign template vars related to attribute groups and colors.
     */
    protected function assignAttributesGroups($product_for_template = \null)
    {
    }
    /**
     * Get and assign attributes combinations informations.
     */
    protected function assignAttributesCombinations()
    {
    }
    /**
     * Assign template vars related to category.
     */
    protected function assignCategory()
    {
    }
    protected function transformDescriptionWithImg($desc)
    {
    }
    protected function pictureUpload()
    {
    }
    protected function textRecord()
    {
    }
    /**
     * Calculation of currency-converted discounts for specific prices on product.
     *
     * @param array $specific_prices array of specific prices definitions (DEFAULT currency)
     * @param float $price current price in CURRENT currency
     * @param float $tax_rate in percents
     * @param float $ecotax_amount in DEFAULT currency, with tax
     *
     * @return array
     */
    protected function formatQuantityDiscounts($specific_prices, $price, $tax_rate, $ecotax_amount)
    {
    }
    /**
     * @return Product
     */
    public function getProduct()
    {
    }
    /**
     * @return Category|null
     */
    public function getCategory()
    {
    }
    /**
     * Return id_product_attribute by id_product_attribute request parameter.
     *
     * @return int
     */
    protected function getIdProductAttributeByRequest()
    {
    }
    /**
     * If the PS_DISP_UNAVAILABLE_ATTR functionality is enabled, this method check
     * if $checkedIdProductAttribute is available.
     * If not try to return the first available attribute, if none are available
     * simply returns the input.
     *
     * @param int $checkedIdProductAttribute
     *
     * @return int
     */
    protected function tryToGetAvailableIdProductAttribute($checkedIdProductAttribute)
    {
    }
    public function getTemplateVarProduct()
    {
    }
    /**
     * @param array $product
     *
     * @return int
     */
    protected function getProductMinimalQuantity($product)
    {
    }
    /**
     * @param array $product
     *
     * @return float
     */
    protected function getProductEcotax(array $product): float
    {
    }
    /**
     * @param int $combinationId
     *
     * @return ProductController|null
     */
    public function findProductCombinationById($combinationId)
    {
    }
    /**
     * @param array $product
     *
     * @return int
     */
    protected function getRequiredQuantity($product)
    {
    }
    public function getBreadcrumbLinks()
    {
    }
    protected function addProductCustomizationData(array $product_full)
    {
    }
    /**
     * @return array
     */
    public function getTemplateVarPage()
    {
    }
    /**
     * {@inheritdoc}
     *
     * Indicates if the provided combination exists and belongs to the product
     *
     * @param int $productAttributeId
     * @param int $productId
     *
     * @return bool
     */
    protected function isValidCombination($productAttributeId, $productId)
    {
    }
    /**
     * Return information whether we are or not in quick view mode.
     *
     * @return bool
     */
    public function isQuickView(): bool
    {
    }
    /**
     * Set quick view mode.
     *
     * @param bool $enabled
     */
    public function setQuickViewMode(bool $enabled = \true)
    {
    }
    /**
     * Return information whether we are or not in preview mode.
     *
     * @return bool
     */
    public function isPreview(): bool
    {
    }
    /**
     * Set preview mode.
     *
     * @param bool $enabled
     */
    public function setPreviewMode(bool $enabled = \true)
    {
    }
}
