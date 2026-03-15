<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Holds information about product prices
 */
class ProductPricesInformation
{
    /**
     * @param DecimalNumber $price
     * @param DecimalNumber $priceTaxIncluded
     * @param DecimalNumber $ecotax
     * @param DecimalNumber $ecotaxTaxIncluded
     * @param int $taxRulesGroupId
     * @param bool $onSale
     * @param DecimalNumber $wholesalePrice
     * @param DecimalNumber $unitPrice
     * @param DecimalNumber $unitPriceTaxIncluded
     * @param string $unity
     * @param DecimalNumber $unitPriceRatio
     * @param PriorityList|null $specificPricePriorities
     */
    public function __construct(\PrestaShop\Decimal\DecimalNumber $price, \PrestaShop\Decimal\DecimalNumber $priceTaxIncluded, \PrestaShop\Decimal\DecimalNumber $ecotax, \PrestaShop\Decimal\DecimalNumber $ecotaxTaxIncluded, int $taxRulesGroupId, bool $onSale, \PrestaShop\Decimal\DecimalNumber $wholesalePrice, \PrestaShop\Decimal\DecimalNumber $unitPrice, \PrestaShop\Decimal\DecimalNumber $unitPriceTaxIncluded, string $unity, \PrestaShop\Decimal\DecimalNumber $unitPriceRatio, ?\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\PriorityList $specificPricePriorities)
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getPrice(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getPriceTaxIncluded(): \PrestaShop\Decimal\DecimalNumber
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
     * @return int
     */
    public function getTaxRulesGroupId(): int
    {
    }
    /**
     * @return bool
     */
    public function isOnSale(): bool
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
    public function getUnitPrice(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getUnitPriceTaxIncluded(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return string
     */
    public function getUnity(): string
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getUnitPriceRatio(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return PriorityList|null
     */
    public function getSpecificPricePriorities(): ?\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\PriorityList
    {
    }
}
