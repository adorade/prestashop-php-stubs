<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\QueryResult;

/**
 * Provides data for editing CatalogPriceRule
 */
class EditableCatalogPriceRule
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject\CatalogPriceRuleId $catalogPriceRuleId
     * @param string $name
     * @param int $shopId
     * @param int $currencyId
     * @param int $countryId
     * @param int $groupId
     * @param int $fromQuantity
     * @param \PrestaShop\Decimal\DecimalNumber $price
     * @param \PrestaShop\PrestaShop\Core\Domain\ValueObject\Reduction $reduction
     * @param bool $includeTax
     * @param \DateTime|null $from
     * @param \DateTime|null $to
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject\CatalogPriceRuleId $catalogPriceRuleId, string $name, int $shopId, int $currencyId, int $countryId, int $groupId, int $fromQuantity, \PrestaShop\Decimal\DecimalNumber $price, \PrestaShop\PrestaShop\Core\Domain\ValueObject\Reduction $reduction, bool $includeTax, ?\DateTime $from, ?\DateTime $to)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject\CatalogPriceRuleId
     */
    public function getCatalogPriceRuleId(): \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject\CatalogPriceRuleId
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return int
     */
    public function getShopId(): int
    {
    }
    /**
     * @return int
     */
    public function getCurrencyId(): int
    {
    }
    /**
     * @return int
     */
    public function getCountryId(): int
    {
    }
    /**
     * @return int
     */
    public function getGroupId(): int
    {
    }
    /**
     * @return int
     */
    public function getFromQuantity(): int
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getPrice(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return \DateTime|null
     */
    public function getFrom(): ?\DateTime
    {
    }
    /**
     * @return \DateTime|null
     */
    public function getTo(): ?\DateTime
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\ValueObject\Reduction
     */
    public function getReduction(): \PrestaShop\PrestaShop\Core\Domain\ValueObject\Reduction
    {
    }
    /**
     * @return bool
     */
    public function isTaxIncluded(): bool
    {
    }
}
