<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Command;

/**
 * Edits catalog price rule with given data
 */
class EditCatalogPriceRuleCommand
{
    /**
     * @param int $catalogPriceRuleId
     *
     * @throws CatalogPriceRuleConstraintException
     */
    public function __construct(int $catalogPriceRuleId)
    {
    }
    /**
     * @return CatalogPriceRuleId
     */
    public function getCatalogPriceRuleId(): \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\ValueObject\CatalogPriceRuleId
    {
    }
    /**
     * @return string|null
     */
    public function getName(): ?string
    {
    }
    /**
     * @param string $name
     */
    public function setName(string $name)
    {
    }
    /**
     * @return int|null
     */
    public function getShopId(): ?int
    {
    }
    /**
     * @param int $shopId
     */
    public function setShopId(int $shopId)
    {
    }
    /**
     * @return int|null
     */
    public function getCurrencyId(): ?int
    {
    }
    /**
     * @param int $currencyId
     */
    public function setCurrencyId(int $currencyId)
    {
    }
    /**
     * @return int|null
     */
    public function getCountryId(): ?int
    {
    }
    /**
     * @param int $countryId
     */
    public function setCountryId(int $countryId)
    {
    }
    /**
     * @return int|null
     */
    public function getGroupId(): ?int
    {
    }
    /**
     * @param int $groupId
     */
    public function setGroupId(int $groupId)
    {
    }
    /**
     * @return int|null
     */
    public function getFromQuantity(): ?int
    {
    }
    /**
     * @param int $fromQuantity
     */
    public function setFromQuantity(int $fromQuantity)
    {
    }
    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
    }
    /**
     * @param float $price
     */
    public function setPrice(float $price)
    {
    }
    /**
     * @return DateTime|null
     */
    public function getDateTimeFrom(): ?\DateTime
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
     * @return DateTime|null
     */
    public function getDateTimeTo(): ?\DateTime
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
    /**
     * @return bool|null
     */
    public function isTaxIncluded(): ?bool
    {
    }
    /**
     * @param bool $includeTax
     */
    public function setIncludeTax(bool $includeTax)
    {
    }
    /**
     * @return Reduction|null
     */
    public function getReduction(): ?\PrestaShop\PrestaShop\Core\Domain\ValueObject\Reduction
    {
    }
    /**
     * @param string $type
     * @param string $value
     */
    public function setReduction(string $type, string $value)
    {
    }
}
