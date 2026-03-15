<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\QueryResult;

class CatalogPriceRuleForListing
{
    /**
     * CatalogPriceRuleForListing constructor.
     *
     * @param int $catalogPriceRuleId
     * @param string $catalogPriceRuleName
     * @param int $fromQuantity
     * @param string $reductionType
     * @param DecimalNumber $reduction
     * @param bool $isTaxIncluded
     * @param DateTimeInterface $dateStart
     * @param DateTimeInterface $dateEnd
     * @param string|null $shopName
     * @param string|null $currencyName
     * @param string|null $countryName
     * @param string|null $groupName
     * @param string|null $currencyIso
     */
    public function __construct(int $catalogPriceRuleId, string $catalogPriceRuleName, int $fromQuantity, string $reductionType, \PrestaShop\Decimal\DecimalNumber $reduction, bool $isTaxIncluded, \DateTimeInterface $dateStart, \DateTimeInterface $dateEnd, ?string $shopName, ?string $currencyName, ?string $countryName, ?string $groupName, ?string $currencyIso)
    {
    }
    /**
     * @return int
     */
    public function getCatalogPriceRuleId(): int
    {
    }
    /**
     * @return string
     */
    public function getCatalogPriceRuleName(): string
    {
    }
    /**
     * @return int
     */
    public function getFromQuantity(): int
    {
    }
    /**
     * @return string
     */
    public function getReductionType(): string
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getReduction(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DateTimeInterface
     */
    public function getDateStart(): \DateTimeInterface
    {
    }
    /**
     * @return DateTimeInterface
     */
    public function getDateEnd(): \DateTimeInterface
    {
    }
    /**
     * @return string|null
     */
    public function getShopName(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getCurrencyName(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getCountryName(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getGroupName(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getCurrencyIso(): ?string
    {
    }
    /**
     * @return bool
     */
    public function isTaxIncluded(): bool
    {
    }
}
