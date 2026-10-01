<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Product;

class ProductListingLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\Product\ProductLazyArray
{
    /**
     * Custom implementation of add to cart URL for product listing. In product listing, we have a bit stricter
     * rules to allow adding to cart a product. Specifically, we do not want to allow adding to cart of product
     * combinations if the setting is disabled. Also, we do not want to allow adding to cart of products that
     * require customization, because it's not possible to do so from the listing page.
     *
     * @return string|null
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getAddToCartUrl()
    {
    }
    /**
     * @param array $product
     * @param \PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings
     *
     * @return bool
     */
    protected function shouldEnableAddToCartButton(array $product, \PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings)
    {
    }
    /**
     * Returns the quantity wanted value for products in listings. We have this specific implementation
     * because in listings, the quantity wanted is not to be taken from the request directly.
     * If a specific value was already provided, we use it. For example, in cart context.
     *
     * @return int Quantity wanted, usually 1, altered if needed, always a positive integer
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getQuantityWanted()
    {
    }
}
