<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Class CustomerProductsInformation holds information about products that customers has bought and viewed.
 */
class ProductsInformation
{
    /**
     * @param BoughtProductInformation[] $boughtProductsInformation
     * @param ViewedProductInformation[] $viewedProductsInformation
     */
    public function __construct(array $boughtProductsInformation, array $viewedProductsInformation)
    {
    }
    /**
     * @return BoughtProductInformation[]
     */
    public function getBoughtProductsInformation()
    {
    }
    /**
     * @return ViewedProductInformation[]
     */
    public function getViewedProductsInformation()
    {
    }
}
