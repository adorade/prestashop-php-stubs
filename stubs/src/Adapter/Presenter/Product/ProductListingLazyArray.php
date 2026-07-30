<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Product;

class ProductListingLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\Product\ProductLazyArray
{
    /**
     * @arrayAccess
     *
     * @return string|null
     */
    public function getAddToCartUrl()
    {
    }
    /**
     * @param array $product
     * @param ProductPresentationSettings $settings
     *
     * @return bool
     */
    protected function shouldEnableAddToCartButton(array $product, \PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings)
    {
    }
}
