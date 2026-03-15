<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\QueryResult;

class SpecificPriceForListing
{
    /**
     * @param int $specificPriceId
     * @param string $reductionType
     * @param DecimalNumber $reductionValue
     * @param bool $includesTax
     * @param FixedPriceInterface $fixedPrice
     * @param int $fromQuantity
     * @param DateTimeInterface $dateTimeFrom
     * @param DateTimeInterface $dateTimeTo
     * @param string|null $combinationName
     * @param string|null $shop
     * @param string|null $currencyName
     * @param string|null $currencyISOCode
     * @param string|null $country
     * @param string|null $group
     * @param string|null $customer
     */
    public function __construct(int $specificPriceId, string $reductionType, \PrestaShop\Decimal\DecimalNumber $reductionValue, bool $includesTax, \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\FixedPriceInterface $fixedPrice, int $fromQuantity, \DateTimeInterface $dateTimeFrom, \DateTimeInterface $dateTimeTo, ?string $combinationName, ?string $shop, ?string $currencyName, ?string $currencyISOCode, ?string $country, ?string $group, ?string $customer)
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
    public function getReductionValue(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return bool
     */
    public function includesTax(): bool
    {
    }
    /**
     * @return string|null
     */
    public function getCombinationName(): ?string
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
    public function getCurrencyISOCode(): ?string
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
    public function getCustomerName(): ?string
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
}
