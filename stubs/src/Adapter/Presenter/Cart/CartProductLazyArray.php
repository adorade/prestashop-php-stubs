<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Cart;

class CartProductLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\Product\ProductListingLazyArray
{
    /**
     * Custom implementation of quantity information for cart products. In cart, we use the data
     * a bit differently than in product listing. We also have edge cases when some of the ordered
     * items are in stock, and some are not.
     *
     * @param \PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings
     * @param array $product
     * @param \Language $language
     */
    public function addQuantityInformation(\PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings, array $product, \Language $language)
    {
    }
}
