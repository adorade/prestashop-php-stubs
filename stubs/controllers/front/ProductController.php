<?php

class ProductControllerCore extends \ProductPresentingFrontControllerCore
{
    /** @var string */
    public $php_self = 'product';
    /** @var int */
    protected $id_product;
    /** @var int|null */
    protected $id_product_attribute;
    /** @var Product|null */
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
    public function canonicalRedirection(string $canonical_url = ''): void
    {
    }
    /**
     * Returns canonical URL for the current product
     *
     * @return string
     */
    public function getCanonicalURL(): string
    {
    }
    /**
     * Initialize product controller.
     *
     * @see FrontController::init()
     */
    public function init(): void
    {
    }
    /**
     * Performs multiple checks and redirects user to error page if needed
     */
    public function checkPermissionsToViewProduct(): void
    {
    }
    /**
     * Loads related category to current visit. First it tries to get a category the user came from - it uses HTTP referer for this.
     * If no category is found (or it's invalid), we use product's default category.
     */
    public function initializeCategory(): void
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
     * Processes submitted customizations
     *
     * @see FrontController::postProcess()
     */
    public function postProcess(): void
    {
    }
    public function displayAjaxQuickview(): void
    {
    }
    public function displayAjaxRefresh(): void
    {
    }
    /**
     * Displays information, if the customer has this product in cart already.
     */
    protected function addCartQuantityNotification(): void
    {
    }
    /**
     * Assign price and tax to the template.
     */
    protected function assignPriceAndTax(): void
    {
    }
    /**
     * Assign template vars related to attribute groups and colors.
     */
    protected function assignAttributesGroups(?\PrestaShop\PrestaShop\Adapter\Presenter\Product\ProductLazyArray $product_for_template = \null)
    {
    }
    /**
     * Get and assign attributes combinations informations.
     */
    protected function assignAttributesCombinations(): void
    {
    }
    /**
     * Assign template vars related to manufacturer.
     */
    protected function assignManufacturer()
    {
    }
    /**
     * Assign template vars related to category.
     */
    protected function assignCategory(): void
    {
    }
    protected function transformDescriptionWithImg(string $desc)
    {
    }
    protected function pictureUpload(): void
    {
    }
    protected function textRecord(): void
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
    protected function formatQuantityDiscounts(array $specific_prices, float $price, float $tax_rate, float $ecotax_amount)
    {
    }
    /**
     * @return Product|null
     */
    public function getProduct(): ?\Product
    {
    }
    /**
     * @return Category|null
     */
    public function getCategory(): ?\Category
    {
    }
    /**
     * Return id_product_attribute by id_product_attribute request parameter.
     *
     * @return int
     */
    protected function getIdProductAttributeByRequest(): int
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
    protected function tryToGetAvailableIdProductAttribute(int $checkedIdProductAttribute)
    {
    }
    public function getTemplateVarProduct(): \PrestaShop\PrestaShop\Adapter\Presenter\Product\ProductLazyArray
    {
    }
    /**
     * Gets the minimal quantity allowed for the product or its combination. With no adjustments
     * by the current context.
     *
     * @todo This method should be migrated to ProductLazyArray, so it's available also in listings.
     *
     * @param array $product
     *
     * @return int Minimal quantity of product from it's settings, always a positive integer
     */
    protected function getProductMinimalQuantity(\PrestaShop\PrestaShop\Adapter\Presenter\Product\ProductLazyArray|array $product)
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
     * @return array<string, mixed>|null
     */
    public function findProductCombinationById(int $combinationId)
    {
    }
    /**
     * Gets the minimal quantity the customer has to purchase. We cannot just let him buy 1 piece
     * if the minimal quantity is higher. Also, we adjust it by the quantity already in cart.
     *
     * @todo This method should be migrated to ProductLazyArray, so it's available also in listings.
     *       It's already implemented there.
     *
     * @param array $product
     *
     * @return int Minimal quantity of product the customer buy right now, always a positive integer
     */
    protected function getRequiredQuantity(\PrestaShop\PrestaShop\Adapter\Presenter\Product\ProductLazyArray|array $product)
    {
    }
    /**
     * Gets the quantity wanted by the customer for the product. We will take his request,
     * but we will adjust it if it's lower than the required quantity.
     *
     * @todo This method should be migrated to ProductLazyArray, so it's available also in listings.
     *       It's already implemented there.
     *
     * @param array $product
     *
     * @return int Quantity of product requested by the customer, altered if needed, always a positive integer
     */
    public function getWantedQuantity(\PrestaShop\PrestaShop\Adapter\Presenter\Product\ProductLazyArray|array $product): int
    {
    }
    /**
     * Generates breadcrumb according to product category tree.
     * If the product is accessed from another category than product default category, it will generate the breadcrumb according to current category.
     *
     * @return array
     *
     * @throws PrestaShopException
     */
    public function getBreadcrumbLinks(): array
    {
    }
    protected function addProductCustomizationData(array $product_full)
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
     * {@inheritdoc}
     *
     * Indicates if the provided combination exists and belongs to the product
     *
     * @param int $productAttributeId
     * @param int $productId
     *
     * @return bool
     */
    protected function isValidCombination(int $productAttributeId, int $productId)
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
