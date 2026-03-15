<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Cart;

class CartPresenter implements \PrestaShop\PrestaShop\Adapter\Presenter\PresenterInterface
{
    /**
     * @var ProductPresentationSettings
     */
    protected $settings;
    /**
     * @var ProductAssembler
     */
    protected $productAssembler;
    public function __construct()
    {
    }
    /**
     * @param array $products
     * @param Cart $cart
     *
     * @return array
     */
    public function addCustomizedData(array $products, \Cart $cart)
    {
    }
    /**
     * @param Cart $cart
     *
     * @throws Exception
     */
    public function present($cart, bool $shouldSeparateGifts = false): \PrestaShop\PrestaShop\Adapter\Presenter\Cart\CartLazyArray
    {
    }
    /**
     * Receives a string containing a list of attributes affected to the product and returns them as an array.
     *
     * @param string $attributes
     *
     * @return array Converted attributes in an array
     */
    public function getAttributesArrayFromString($attributes)
    {
    }
    public function getSettings(): \PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings
    {
    }
    public function getProductAssembler(): \ProductAssembler
    {
    }
    public function includeTaxes(): bool
    {
    }
}
