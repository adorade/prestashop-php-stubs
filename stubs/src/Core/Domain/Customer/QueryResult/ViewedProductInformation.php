<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Class ViewedProductInformation holds information about product that customer has viewed.
 */
class ViewedProductInformation
{
    /**
     * @param int $productId
     * @param string $productName
     * @param string $productUrl
     */
    public function __construct($productId, $productName, $productUrl)
    {
    }
    /**
     * @return int
     */
    public function getProductId()
    {
    }
    /**
     * @return string
     */
    public function getProductName()
    {
    }
    /**
     * @return string
     */
    public function getProductUrl()
    {
    }
}
