<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult;

/**
 * Holds information of combination prices
 */
class CombinationPrices
{
    public function __construct(\PrestaShop\Decimal\DecimalNumber $impactOnPrice, \PrestaShop\Decimal\DecimalNumber $impactOnPriceTaxIncluded, \PrestaShop\Decimal\DecimalNumber $impactOnUnitPrice, \PrestaShop\Decimal\DecimalNumber $impactOnUnitPriceTaxIncluded, \PrestaShop\Decimal\DecimalNumber $ecotax, \PrestaShop\Decimal\DecimalNumber $ecotaxTaxIncluded, \PrestaShop\Decimal\DecimalNumber $wholesalePrice, \PrestaShop\Decimal\DecimalNumber $productTaxRate, \PrestaShop\Decimal\DecimalNumber $productPrice, \PrestaShop\Decimal\DecimalNumber $productEcotax)
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getImpactOnPrice(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getImpactOnPriceTaxIncluded(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getImpactOnUnitPrice(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getImpactOnUnitPriceTaxIncluded(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getEcotax(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getEcotaxTaxIncluded(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getWholesalePrice(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getProductTaxRate(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getProductPrice(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getProductEcotax(): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
