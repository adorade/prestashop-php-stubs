<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Holds information about product prices
 */
class ProductPricesInformation
{
    /**
     * @param \PrestaShop\Decimal\DecimalNumber $price
     * @param \PrestaShop\Decimal\DecimalNumber $priceTaxIncluded
     * @param \PrestaShop\Decimal\DecimalNumber $ecotax
     * @param \PrestaShop\Decimal\DecimalNumber $ecotaxTaxIncluded
     * @param int $taxRulesGroupId
     * @param bool $onSale
     * @param \PrestaShop\Decimal\DecimalNumber $wholesalePrice
     * @param \PrestaShop\Decimal\DecimalNumber $unitPrice
     * @param \PrestaShop\Decimal\DecimalNumber $unitPriceTaxIncluded
     * @param string $unity
     * @param \PrestaShop\Decimal\DecimalNumber $unitPriceRatio
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\PriorityList|null $specificPricePriorities
     */
    public function __construct(\PrestaShop\Decimal\DecimalNumber $price, \PrestaShop\Decimal\DecimalNumber $priceTaxIncluded, \PrestaShop\Decimal\DecimalNumber $ecotax, \PrestaShop\Decimal\DecimalNumber $ecotaxTaxIncluded, int $taxRulesGroupId, bool $onSale, \PrestaShop\Decimal\DecimalNumber $wholesalePrice, \PrestaShop\Decimal\DecimalNumber $unitPrice, \PrestaShop\Decimal\DecimalNumber $unitPriceTaxIncluded, string $unity, \PrestaShop\Decimal\DecimalNumber $unitPriceRatio, ?\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\PriorityList $specificPricePriorities)
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getPrice(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getPriceTaxIncluded(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getEcotax(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
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
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getWholesalePrice(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getUnitPrice(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
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
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getUnitPriceRatio(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\PriorityList|null
     */
    public function getSpecificPricePriorities(): ?\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\PriorityList
    {
    }
}
