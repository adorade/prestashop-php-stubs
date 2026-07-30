<?php

namespace PrestaShop\PrestaShop\Core\Product;

/**
 * This class gets the extra content to display on the product page
 * from the modules hooked on displayProductExtraContent.
 */
class ProductExtraContentFinder extends \PrestaShopBundle\Service\Hook\HookFinder
{
    protected $hookName = 'displayProductExtraContent';
    protected $expectedInstanceClasses = ['PrestaShop\PrestaShop\Core\Product\ProductExtraContent'];
    /**
     * Execute hook to get all addionnal product content, and check if valid
     * (not empty and only instances of class ProductExtraContent).
     *
     * @return array
     *
     * @throws \Exception
     */
    public function find()
    {
    }
}
