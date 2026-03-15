<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Command;

/**
 * Adds new catalog price rule with provided data
 */
class AddCatalogPriceRuleCommand
{
    /**
     * @param string $name
     * @param int $currencyId
     * @param int $countryId
     * @param int $groupId
     * @param int $fromQuantity
     * @param string $reductionType
     * @param string $reductionValue
     * @param int $shopId
     * @param bool $includeTax
     * @param float $price
     *
     * @throws DomainConstraintException
     */
    public function __construct(string $name, int $currencyId, int $countryId, int $groupId, int $fromQuantity, string $reductionType, string $reductionValue, int $shopId, bool $includeTax, float $price)
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
     * @return Reduction
     */
    public function getReduction(): \PrestaShop\PrestaShop\Core\Domain\ValueObject\Reduction
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getPrice(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DateTime|null
     */
    public function getDateTimeFrom(): ?\DateTime
    {
    }
    /**
     * @return DateTime|null
     */
    public function getDateTimeTo(): ?\DateTime
    {
    }
    /**
     * @return bool
     */
    public function isTaxIncluded(): bool
    {
    }
    /**
     * @param string $dateTimeFrom
     *
     * @throws CatalogPriceRuleConstraintException
     */
    public function setDateTimeFrom(string $dateTimeFrom)
    {
    }
    /**
     * @param string $dateTimeTo
     *
     * @throws CatalogPriceRuleConstraintException
     */
    public function setDateTimeTo(string $dateTimeTo)
    {
    }
}
