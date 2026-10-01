<?php

class CartControllerCore extends \FrontController
{
    /** @var string */
    public $php_self = 'cart';
    protected $id_product;
    protected $id_product_attribute;
    protected $id_address_delivery;
    protected $customization_id;
    protected $qty;
    /**
     * To specify if you are in the preview mode or not.
     *
     * @var bool
     */
    protected $preview;
    /** @var bool */
    public $ssl = \true;
    /**
     * An array of errors, in case the update action of product is wrong.
     *
     * @var string[]
     */
    protected $updateOperationError = [];
    /**
     * This is not a public page, so the canonical redirection is disabled.
     *
     * @param string $canonicalURL
     */
    public function canonicalRedirection($canonicalURL = '')
    {
    }
    /**
     * Initialize cart controller.
     *
     * @see FrontController::init()
     */
    public function init()
    {
    }
    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {
    }
    public function displayAjaxUpdate()
    {
    }
    public function displayAjaxRefresh()
    {
    }
    /**
     * @deprecated 1.7.3.1 the product link is now accessible
     *                     in #quantity_wanted[data-url-update]
     */
    public function displayAjaxProductRefresh()
    {
    }
    public function postProcess()
    {
    }
    protected function updateCart()
    {
    }
    /**
     * This process delete a product from the cart.
     */
    protected function processDeleteProductInCart()
    {
    }
    /**
     * This process add or update a product in the cart.
     */
    protected function processChangeProductInCart()
    {
    }
    /**
     * @param array $productInCart
     *
     * @return bool
     */
    public function productInCartMatchesCriteria($productInCart)
    {
    }
    public function getTemplateVarPage()
    {
    }
    /**
     * Check product quantity availability to acknowledge whether
     * an availability error should be raised.
     *
     * If shop has been configured to oversell, answer is no.
     * If there is no items available (no stock), answer is yes.
     * If there is items available, but the Cart already contains more than the quantity,
     * answer is yes.
     *
     * @param Product $product
     * @param int $qtyToCheck
     *
     * @return bool
     */
    protected function shouldAvailabilityErrorBeRaised($product, $qtyToCheck)
    {
    }
    /**
     * Check if the products in the cart are available.
     * This is a general check that is handy when you want to check whole cart,
     * for example when loading the cart or order page.
     *
     * @return bool|string
     */
    protected function areProductsAvailable()
    {
    }
}
