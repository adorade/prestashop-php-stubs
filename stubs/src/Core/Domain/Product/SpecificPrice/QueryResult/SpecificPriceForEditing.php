<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryResult;

class SpecificPriceForEditing
{
    /**
     * @param int $specificPriceId
     * @param string $reductionType
     * @param DecimalNumber $reductionAmount
     * @param bool $includesTax
     * @param FixedPriceInterface $fixedPrice
     * @param int $fromQuantity
     * @param DateTimeInterface $dateTimeFrom
     * @param DateTimeInterface $dateTimeTo
     * @param int $productId
     * @param CustomerInfo|null $customerInfo
     * @param int|null $combinationId
     * @param int|null $shopId
     * @param int|null $currencyId
     * @param int|null $countryId
     * @param int|null $groupId
     */
    public function __construct(int $specificPriceId, string $reductionType, \PrestaShop\Decimal\DecimalNumber $reductionAmount, bool $includesTax, \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\FixedPriceInterface $fixedPrice, int $fromQuantity, \DateTimeInterface $dateTimeFrom, \DateTimeInterface $dateTimeTo, int $productId, ?\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryResult\CustomerInfo $customerInfo, ?int $combinationId, ?int $shopId, ?int $currencyId, ?int $countryId, ?int $groupId)
    {
    }
    /**
     * @return int
     */
    public function getSpecificPriceId(): int
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
    public function getReductionAmount(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return bool
     */
    public function includesTax(): bool
    {
    }
    /**
     * @return FixedPriceInterface
     */
    public function getFixedPrice(): \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\FixedPriceInterface
    {
    }
    /**
     * @return int
     */
    public function getFromQuantity(): int
    {
    }
    /**
     * @return int|null
     */
    public function getShopId(): ?int
    {
    }
    /**
     * @return int|null
     */
    public function getCurrencyId(): ?int
    {
    }
    /**
     * @return int|null
     */
    public function getCountryId(): ?int
    {
    }
    /**
     * @return int|null
     */
    public function getGroupId(): ?int
    {
    }
    /**
     * @return CustomerInfo|null
     */
    public function getCustomerInfo(): ?\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryResult\CustomerInfo
    {
    }
    /**
     * @return DateTimeInterface
     */
    public function getDateTimeFrom(): \DateTimeInterface
    {
    }
    /**
     * @return DateTimeInterface
     */
    public function getDateTimeTo(): \DateTimeInterface
    {
    }
    /**
     * @return int
     */
    public function getProductId(): int
    {
    }
    /**
     * @return int|null
     */
    public function getCombinationId(): ?int
    {
    }
}
