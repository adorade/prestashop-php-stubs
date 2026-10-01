<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Holds product details
 */
class ProductDetails
{
    /**
     * @param string $isbn
     * @param string $upc
     * @param string $gtin
     * @param string $mpn
     * @param string $reference
     */
    public function __construct(string $isbn, string $upc, string $gtin, string $mpn, string $reference)
    {
    }
    /**
     * @return string
     */
    public function getIsbn(): string
    {
    }
    /**
     * @return string
     */
    public function getUpc(): string
    {
    }
    /**
     * @return string
     */
    public function getEan13(): string
    {
    }
    public function getGtin(): string
    {
    }
    /**
     * @return string
     */
    public function getMpn(): string
    {
    }
    /**
     * @return string
     */
    public function getReference(): string
    {
    }
}
