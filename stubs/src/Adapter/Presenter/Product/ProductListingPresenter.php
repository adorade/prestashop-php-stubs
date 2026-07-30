<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Product;

class ProductListingPresenter extends \PrestaShop\PrestaShop\Adapter\Presenter\Product\ProductPresenter
{
    /**
     * @param ProductPresentationSettings $settings
     * @param array $product
     * @param Language $language
     *
     * @return ProductLazyArray|ProductListingLazyArray
     *
     * @throws \ReflectionException
     */
    public function present(\PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings, array $product, \Language $language)
    {
    }
}
