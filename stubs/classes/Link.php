<?php

class LinkCore
{
    /** @var bool Rewriting activation */
    protected $allow;
    protected $url;
    public static $cache = ['page' => []];
    public $protocol_link;
    public $protocol_content;
    protected $ssl_enable;
    protected $urlShopId = \null;
    protected static $category_disable_rewrite = \null;
    /**
     * Constructor (initialization only).
     *
     * @param string|null $protocolLink
     * @param string|null $protocolContent
     */
    public function __construct($protocolLink = \null, $protocolContent = \null)
    {
    }
    /**
     * Create a link to delete a product.
     *
     * @param Product|array|int $product ID of the product OR a Product object
     * @param int $idPicture ID of the picture to delete
     *
     * @return string
     */
    public function getProductDeletePictureLink($product, $idPicture)
    {
    }
    /**
     * Return a product object from various product format.
     *
     * @param Product|array|int $product
     * @param int $idLang
     * @param int $idShop
     *
     * @return Product
     *
     * @throws PrestaShopException
     */
    public function getProductObject($product, $idLang, $idShop)
    {
    }
    /**
     * Create a link to a product.
     *
     * @param ProductCore|array|int $product Product object (can be an ID product, but deprecated)
     * @param string|null $alias
     * @param string|null $category
     * @param string|null $ean13
     * @param int|null $idLang
     * @param int|null $idShop (since 1.5.0) ID shop need to be used when we generate a product link for a product in a cart
     * @param int|null $idProductAttribute ID product attribute
     * @param bool $force_routes
     * @param bool $relativeProtocol
     * @param bool $withIdInAnchor
     * @param array $extraParams
     * @param bool $addAnchor
     *
     * @return string
     *
     * @throws PrestaShopException
     */
    public function getProductLink($product, $alias = \null, $category = \null, $ean13 = \null, $idLang = \null, $idShop = \null, $idProductAttribute = \null, $force_routes = \false, $relativeProtocol = \false, $withIdInAnchor = \false, $extraParams = [], bool $addAnchor = \true)
    {
    }
    /**
     * Get the URL to remove the Product from the Cart.
     *
     * @param int $idProduct
     * @param int $idProductAttribute
     * @param int|null $idCustomization
     *
     * @return string
     */
    public function getRemoveFromCartURL($idProduct, $idProductAttribute, $idCustomization = \null)
    {
    }
    /**
     * Get URL to add one Product to Cart.
     *
     * @param int $idProduct
     * @param int $idProductAttribute
     * @param int|null $idCustomization
     *
     * @return string
     */
    public function getUpQuantityCartURL($idProduct, $idProductAttribute, $idCustomization = \null)
    {
    }
    /**
     * Get URL to remove one Product to Cart.
     *
     * @param int $idProduct
     * @param int $idProductAttribute
     * @param int|null $idCustomization
     *
     * @return string
     */
    public function getDownQuantityCartURL($idProduct, $idProductAttribute, $idCustomization = \null)
    {
    }
    /**
     * Get URL to update quantity of Product in Cart.
     *
     * @param int $idProduct
     * @param int $idProductAttribute
     * @param int|null $idCustomization
     * @param string|null $op
     *
     * @return string
     */
    public function getUpdateQuantityCartURL($idProduct, $idProductAttribute, $idCustomization = \null, $op = \null)
    {
    }
    /**
     * Get add to Cart URL.
     *
     * @param int $idProduct
     * @param int $idProductAttribute
     *
     * @return string
     */
    public function getAddToCartURL($idProduct, $idProductAttribute)
    {
    }
    /**
     * Return a category object from various category format.
     *
     * @param Category|array|int $category
     * @param int $idLang
     *
     * @return Category
     *
     * @throws PrestaShopException
     */
    public function getCategoryObject($category, $idLang)
    {
    }
    /**
     * Create a link to a category.
     *
     * @param CategoryCore|array|int|string $category Category object (can be an ID category, but deprecated)
     * @param string|null $alias
     * @param int|null $idLang
     * @param string|null $selectedFilters Url parameter to autocheck filters of the module blocklayered
     * @param int|null $idShop
     * @param bool $relativeProtocol
     *
     * @return string
     */
    public function getCategoryLink($category, $alias = \null, $idLang = \null, $selectedFilters = \null, $idShop = \null, $relativeProtocol = \false)
    {
    }
    /**
     * Create a link to a CMS category.
     *
     * @param CMSCategory|int $cmsCategory CMSCategory object (can be an ID category, but deprecated)
     * @param string|null $alias
     * @param int|null $idLang
     * @param int|null $idShop
     * @param bool $relativeProtocol
     *
     * @return string
     */
    public function getCMSCategoryLink($cmsCategory, $alias = \null, $idLang = \null, $idShop = \null, $relativeProtocol = \false)
    {
    }
    /**
     * Create a link to a CMS page.
     *
     * @param CMS|int $cms CMS object
     * @param string|null $alias
     * @param bool|null $ssl
     * @param int|null $idLang
     * @param int|null $idShop
     * @param bool $relativeProtocol
     *
     * @return string
     */
    public function getCMSLink($cms, $alias = \null, $ssl = \null, $idLang = \null, $idShop = \null, $relativeProtocol = \false)
    {
    }
    /**
     * Create a link to a supplier.
     *
     * @param Supplier|int $supplier Supplier object (can be an ID supplier, but deprecated)
     * @param string|null $alias
     * @param int|null $idLang
     * @param int|null $idShop
     * @param bool $relativeProtocol
     *
     * @return string
     */
    public function getSupplierLink($supplier, $alias = \null, $idLang = \null, $idShop = \null, $relativeProtocol = \false)
    {
    }
    /**
     * Create a link to a manufacturer.
     *
     * @param Manufacturer|int $manufacturer Manufacturer object (can be an ID supplier, but deprecated)
     * @param string|null $alias
     * @param int|null $idLang
     * @param int|null $idShop
     * @param bool $relativeProtocol
     *
     * @return string
     */
    public function getManufacturerLink($manufacturer, $alias = \null, $idLang = \null, $idShop = \null, $relativeProtocol = \false)
    {
    }
    /**
     * Create a link to a module.
     *
     * @since    1.5.0
     *
     * @param string $module Module name
     * @param string $controller
     * @param array $params
     * @param bool|null $ssl
     * @param int|null $idLang
     * @param int|null $idShop
     * @param bool $relativeProtocol
     *
     * @return string
     */
    public function getModuleLink($module, $controller = 'default', array $params = [], $ssl = \null, $idLang = \null, $idShop = \null, $relativeProtocol = \false)
    {
    }
    /**
     * Use controller name to create a link.
     *
     * Warning on fallback to Symfony Router, this exceptions can be thrown
     * - RouteNotFoundException If the named route doesn't exist
     * - MissingMandatoryParametersException When some parameters are missing that are mandatory for the route
     * - InvalidParameterException When a parameter value for a placeholder is not correct because it does not match the requirement
     *
     * @param string $controller
     * @param bool $withToken include or not the token in the url
     * @param array $sfRouteParams (Since 1.7.0.0) Optional parameters to use into New architecture specific cases. If these specific cases should redirect to legacy URLs, then this parameter is used to complete GET query string
     * @param array $params (Since 1.7.0.3) Optional
     *
     * @return string url
     */
    public function getAdminLink($controller, $withToken = \true, $sfRouteParams = [], $params = [])
    {
    }
    /**
     * Warning on fallback to Symfony Router, this exceptions can be thrown
     * - RouteNotFoundException If the named route doesn't exist
     * - MissingMandatoryParametersException When some parameters are missing that are mandatory for the route
     * - InvalidParameterException When a parameter value for a placeholder is not correct because it does not match the requirement
     *
     * @param array $tab
     *
     * @return string
     */
    public function getTabLink(array $tab)
    {
    }
    /**
     * Used when you explicitly want to create a LEGACY admin link, this should be deprecated
     * in 1.8.0.
     *
     * @param string $controller
     * @param bool $withToken
     * @param array $params
     *
     * @return string
     */
    public function getLegacyAdminLink($controller, $withToken = \true, $params = [])
    {
    }
    /**
     * @param int|null $idShop
     * @param bool|null $ssl
     * @param bool $relativeProtocol
     *
     * @return string
     */
    public function getAdminBaseLink($idShop = \null, $ssl = \null, $relativeProtocol = \false)
    {
    }
    /**
     * Search for a shop whose domain matches the current url.
     *
     * @return int|null
     */
    public function getMatchingUrlShopId()
    {
    }
    /**
     * Returns a link to a product image for display
     * Note: the new image filesystem stores product images in subdirectories of img/p/.
     *
     * @param string $name rewrite link of the image
     * @param string $ids id part of the image filename - can be "id_product-id_image" (legacy support, recommended) or "id_image" (new)
     * @param string|null $type Image thumbnail name (small_default, medium_default, large_default, etc.)
     * @param string $extension What image extension should the link point to
     *
     * @return string
     */
    public function getImageLink($name, $ids, $type = \null, string $extension = 'jpg')
    {
    }
    /**
     * Returns a link to a supplier image for display.
     *
     * @param int $idSupplier
     * @param string|null $type Image thumbnail name (small_default, medium_default, large_default, etc.)
     * @param string $extension What image extension should the link point to
     *
     * @return string
     */
    public function getSupplierImageLink($idSupplier, $type = \null, string $extension = 'jpg')
    {
    }
    /**
     * Returns a link to a manufacturer image for display.
     *
     * @param int $idManufacturer
     * @param string|null $type Image thumbnail name (small_default, medium_default, large_default, etc.)
     * @param string $extension What image extension should the link point to
     *
     * @return string
     */
    public function getManufacturerImageLink($idManufacturer, $type = \null, string $extension = 'jpg')
    {
    }
    /**
     * Returns a link to a store image for display.
     *
     * @param string $name
     * @param int $idStore
     * @param string|null $type Image thumbnail name (small_default, medium_default, large_default, etc.)
     * @param string $extension What image extension should the link point to
     *
     * @return string
     */
    public function getStoreImageLink($name, $idStore, $type = \null, string $extension = 'jpg')
    {
    }
    /**
     * @param string $filepath
     *
     * @return string
     */
    public function getMediaLink($filepath)
    {
    }
    /**
     * Create a simple link.
     *
     * @param string $controller
     * @param bool|null $ssl Controls what protocol will be used in the link. Pass null to automatically determine the variant.
     *                       Pass false if you want to specifically generate HTTP variant of the link.
     *                       Passing true is useless and is the same as null, it will automatically default to HTTP if SSL not enabled.
     * @param int|null $idLang
     * @param string|array|null $request
     * @param bool $requestUrlEncode Use URL encode
     * @param int|null $idShop
     * @param bool $relativeProtocol
     *
     * @return string Page link
     */
    public function getPageLink($controller, $ssl = \null, $idLang = \null, $request = \null, $requestUrlEncode = \false, $idShop = \null, $relativeProtocol = \false)
    {
    }
    /**
     * @param string $name
     * @param int $idCategory
     * @param string|null $type Image thumbnail name (small_default, medium_default, large_default, etc.)
     * @param string $extension What image extension should the link point to
     *
     * @return string
     */
    public function getCatImageLink($name, $idCategory, $type = \null, string $extension = 'jpg')
    {
    }
    /**
     * Retrieves a link for the current page in different language.
     *
     * @param int $idLang Language ID
     * @param Context|null $context the context if needed
     *
     * @return string link
     */
    public function getLanguageLink($idLang, \Context $context = \null)
    {
    }
    /**
     * @param string $url
     * @param int $p
     *
     * @return string
     */
    public function goPage($url, $p)
    {
    }
    /**
     * Get pagination link.
     *
     * @param string $type Controller name
     * @param int $idObject
     * @param bool $nb Show nb element per page attribute
     * @param bool $sort Show sort attribute
     * @param bool $pagination Show page number attribute
     * @param bool $array If false return an url, if true return an array
     *
     * @return string|array
     */
    public function getPaginationLink($type, $idObject, $nb = \false, $sort = \false, $pagination = \false, $array = \false)
    {
    }
    /**
     * @param string $url
     * @param string $orderBy
     * @param string $orderWay
     *
     * @return string
     */
    public function addSortDetails($url, $orderBy, $orderWay)
    {
    }
    /**
     * @param int|null $idLang
     * @param Context|null $context
     * @param int|null $idShop
     *
     * @return string
     */
    protected function getLangLink($idLang = \null, \Context $context = \null, $idShop = \null)
    {
    }
    /**
     * @param int|null $idShop
     * @param bool|null $ssl
     * @param bool $relativeProtocol
     *
     * @return string
     */
    public function getBaseLink($idShop = \null, $ssl = \null, $relativeProtocol = \false)
    {
    }
    /**
     * Clean url http://website.com/admin_dir/foo => foo
     * Remove index.php?
     * Remove last char if it's ? or &
     * Remove token if exists.
     *
     * @param string $url
     *
     * @return string
     */
    public static function getQuickLink($url)
    {
    }
    /**
     * Check if url match with current url.
     *
     * @param string $url
     *
     * @return bool
     */
    public function matchQuickLink($url)
    {
    }
    /**
     * @param array $params
     *
     * @return string
     *
     * @throws \InvalidArgumentException
     */
    public static function getUrlSmarty($params)
    {
    }
}
