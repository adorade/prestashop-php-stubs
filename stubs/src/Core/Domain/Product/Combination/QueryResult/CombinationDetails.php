<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult;

/**
 * Transfers combination details
 */
class CombinationDetails
{
    /**
     * @param string $ean13
     * @param string $isbn
     * @param string $mpn
     * @param string $reference
     * @param string $upc
     * @param DecimalNumber $impactOnWeight
     */
    public function __construct(string $ean13, string $isbn, string $mpn, string $reference, string $upc, \PrestaShop\Decimal\DecimalNumber $impactOnWeight)
    {
    }
    /**
     * @return string
     */
    public function getEan13(): string
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
    public function getMpn(): string
    {
    }
    /**
     * @return string
     */
    public function getReference(): string
    {
    }
    /**
     * @return string
     */
    public function getUpc(): string
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getImpactOnWeight(): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
