<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command;

/**
 * Add specific price to a Product
 */
class AddSpecificPriceCommand
{
    /**
     * @param int $productId
     * @param string $reductionType
     * @param string $reductionValue
     * @param bool $includeTax
     * @param string $fixedPrice
     * @param int $fromQuantity
     * @param DateTimeInterface $dateTimeFrom
     * @param DateTimeInterface $dateTimeTo
     *
     * @throws DomainConstraintException
     * @throws ProductConstraintException
     */
    public function __construct(int $productId, string $reductionType, string $reductionValue, bool $includeTax, string $fixedPrice, int $fromQuantity, \DateTimeInterface $dateTimeFrom, \DateTimeInterface $dateTimeTo)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return Reduction
     */
    public function getReduction(): \PrestaShop\PrestaShop\Core\Domain\ValueObject\Reduction
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
     * @return DateTimeInterface
     */
    public function getDateTimeFrom(): \DateTimeInterface
    {
    }
    /**
     * @param DateTimeInterface $dateTimeFrom
     *
     * @see DateTime
     * @see NullDateTime
     *
     * @return AddSpecificPriceCommand
     */
    public function setDateTimeFrom(\DateTimeInterface $dateTimeFrom): self
    {
    }
    /**
     * @return DateTimeInterface
     */
    public function getDateTimeTo(): ?\DateTimeInterface
    {
    }
    /**
     * @param DateTimeInterface $dateTimeTo
     *
     * @see DateTime
     * @see NullDateTime
     *
     * @return AddSpecificPriceCommand
     */
    public function setDateTimeTo(\DateTimeInterface $dateTimeTo): self
    {
    }
    /**
     * @return ShopIdInterface
     */
    public function getShopId(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopIdInterface
    {
    }
    /**
     * @param int $shopId
     *
     * @return $this
     */
    public function setShopId(int $shopId): self
    {
    }
    /**
     * @return CombinationIdInterface
     */
    public function getCombinationId(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationIdInterface
    {
    }
    /**
     * @param int $combinationId
     *
     * @return $this
     */
    public function setCombinationId(int $combinationId): self
    {
    }
    /**
     * @return CurrencyIdInterface
     */
    public function getCurrencyId(): \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyIdInterface
    {
    }
    /**
     * @param int $currencyId
     *
     * @return $this
     */
    public function setCurrencyId(int $currencyId): self
    {
    }
    /**
     * @return CountryIdInterface
     */
    public function getCountryId(): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryIdInterface
    {
    }
    /**
     * @param int $countryId
     *
     * @return $this
     *
     * @throws CountryConstraintException
     */
    public function setCountryId(int $countryId): self
    {
    }
    /**
     * @return GroupIdInterface
     */
    public function getGroupId(): \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupIdInterface
    {
    }
    /**
     * @param int $groupId
     *
     * @return $this
     */
    public function setGroupId(int $groupId): self
    {
    }
    /**
     * @return int
     */
    public function getCustomerId(): int
    {
    }
    /**
     * @param int $customerId
     *
     * @return $this
     */
    public function setCustomerId(int $customerId): self
    {
    }
}
