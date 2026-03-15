<?php

namespace PrestaShop\PrestaShop\Core\Domain\SpecificPrice\Command;

/**
 * @deprecated since 8.0.0 and will be removed in the next major version.
 * @see UpdateProductPriceInCartCommand to change a product price in a cart
 * or @see AddSpecificPriceCommand if you wish to set special price rules on a product
 */
class AddSpecificPriceCommand
{
    /**
     * @param int $productId
     * @param string $reductionType
     * @param string $reductionValue
     * @param bool $includeTax
     * @param float $price
     * @param int $fromQuantity
     *
     * @throws DomainConstraintException
     */
    public function __construct(int $productId, string $reductionType, string $reductionValue, bool $includeTax, float $price, int $fromQuantity)
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
    public function isIncludeTax(): bool
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getPrice(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return int
     */
    public function getFromQuantity(): int
    {
    }
    /**
     * @return DateTime|null
     */
    public function getDateTimeFrom(): ?\DateTime
    {
    }
    /**
     * @param DateTime|null $dateTimeFrom
     */
    public function setDateTimeFrom(?\DateTime $dateTimeFrom): void
    {
    }
    /**
     * @return int|null
     */
    public function getShopGroupId(): ?int
    {
    }
    /**
     * @param int $shopGroupId
     */
    public function setShopGroupId(int $shopGroupId): void
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
    public function setShopId(int $shopId): void
    {
    }
    /**
     * @return int|null
     */
    public function getCartId(): ?int
    {
    }
    /**
     * @param int $cartId
     */
    public function setCartId(int $cartId): void
    {
    }
    /**
     * @return int|null
     */
    public function getProductAttributeId(): ?int
    {
    }
    /**
     * @param int $productAttributeId
     */
    public function setProductAttributeId(int $productAttributeId): void
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
    public function setCurrencyId(int $currencyId): void
    {
    }
    /**
     * @return int|null
     *
     * @deprecated use getCatalogPriceRuleId() instead. (wrong naming used in migration process)
     */
    public function getCartRuleId(): ?int
    {
    }
    /**
     * @return int|null
     */
    public function getCatalogPriceRuleId(): ?int
    {
    }
    /**
     * @param int $cartRuleId
     *
     * @deprecated use setCatalogPriceRuleId() instead. (wrong naming used in migration process)
     */
    public function setCartRuleId(int $cartRuleId): void
    {
    }
    /**
     * @param int $catalogPriceRuleId
     */
    public function setCatalogPriceRuleId(int $catalogPriceRuleId): void
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
    public function setCountryId(int $countryId): void
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
    public function setGroupId(int $groupId): void
    {
    }
    /**
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
    }
    /**
     * @param int $customerId
     */
    public function setCustomerId(int $customerId): void
    {
    }
    /**
     * @return DateTime|null
     */
    public function getDateTimeTo(): ?\DateTime
    {
    }
    /**
     * @param DateTime|null $dateTimeTo
     */
    public function setDateTimeTo(?\DateTime $dateTimeTo): void
    {
    }
}
