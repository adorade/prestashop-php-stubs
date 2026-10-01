<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\Command;

class UpdateDiscountCommand
{
    use \PrestaShop\PrestaShop\Core\Trait\DirtyTrait;
    public function __construct(int $discountId)
    {
    }
    public function getDiscountId(): \PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId
    {
    }
    /**
     * @param array<int, string> $localizedNames
     */
    public function setLocalizedNames(array $localizedNames): self
    {
    }
    /**
     * @return array<int, string>|null
     */
    public function getLocalizedNames(): ?array
    {
    }
    public function isActive(): ?bool
    {
    }
    public function setActive(bool $active): self
    {
    }
    public function getValidFrom(): ?\DateTimeImmutable
    {
    }
    public function getValidTo(): ?\DateTimeImmutable
    {
    }
    public function setValidFrom(\DateTimeImmutable $validFrom): self
    {
    }
    public function setValidTo(\DateTimeImmutable $validTo): self
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\DiscountConstraintException
     */
    public function setValidityDateRange(\DateTimeImmutable $from, \DateTimeImmutable $to): self
    {
    }
    public function getPriority(): ?int
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\DiscountConstraintException
     */
    public function setPriority(int $priority): self
    {
    }
    public function isHighlightInCart(): ?bool
    {
    }
    public function setHighlightInCart(bool $highlightInCart): void
    {
    }
    public function getTotalQuantity(): ?int
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\DiscountConstraintException
     */
    public function setTotalQuantity(?int $quantity): self
    {
    }
    public function getQuantityPerUser(): ?int
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\DiscountConstraintException
     */
    public function setQuantityPerUser(?int $quantityPerUser): self
    {
    }
    public function getDescription(): ?string
    {
    }
    public function setDescription(string $description): self
    {
    }
    public function getCode(): ?string
    {
    }
    public function setCode(string $code): self
    {
    }
    public function allowPartialUse(): ?bool
    {
    }
    public function setAllowPartialUse(bool $allow): self
    {
    }
    public function getCustomerId(): ?\PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerIdInterface
    {
    }
    public function setCustomerId(int $customerId): self
    {
    }
    public function getReductionPercent(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    public function setReductionPercent(\PrestaShop\Decimal\DecimalNumber $reductionPercent): self
    {
    }
    public function getReductionAmount(): ?\PrestaShop\PrestaShop\Core\Domain\ValueObject\Money
    {
    }
    /**
     * Note: the parameters names are important here for API serialization.
     */
    public function setReductionAmount(\PrestaShop\Decimal\DecimalNumber $amount, int $currencyId, bool $taxIncluded): self
    {
    }
    public function getGiftProductId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductConstraintException
     */
    public function setGiftProductId(?int $giftProductId): self
    {
    }
    public function getGiftCombinationId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception\CombinationConstraintException
     */
    public function setGiftCombinationId(?int $giftCombinationId): self
    {
    }
    public function getCheapestProduct(): ?bool
    {
    }
    public function setCheapestProduct(bool $cheapestProduct): self
    {
    }
    public function getReductionProductId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductConstraintException
     */
    public function setReductionProductId(?int $reductionProductId): self
    {
    }
    public function getMinimumProductQuantity(): ?int
    {
    }
    public function setMinimumProductQuantity(int $minimumProductQuantity): self
    {
    }
    public function getMinimumAmount(): ?\PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\MinimumAmount
    {
    }
    /**
     * Note: the parameters names are important here for API serialization.
     * To unset the minimum amount set the first parameter to null (the other parameters can remain empty)
     */
    public function setMinimumAmount(?\PrestaShop\Decimal\DecimalNumber $amount, int $currencyId = 0, bool $taxIncluded = true, bool $shippingIncluded = true): self
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Discount\ProductRuleGroup[]|null
     */
    public function getProductConditions(): ?array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Discount\ProductRuleGroup[]|array<int, array{quantity: int, rules: array<int, array{type: string, itemIds: int[]}>, type: string}> $productConditions
     *
     * @return self
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\DiscountConstraintException
     */
    public function setProductConditions(array $productConditions): self
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId[]|null
     */
    public function getCarrierIds(): ?array
    {
    }
    /**
     * @param int[]|null $carrierIds
     *
     * @return $this
     */
    public function setCarrierIds(?array $carrierIds): self
    {
    }
    public function getCountryIds(): ?array
    {
    }
    public function setCountryIds(?array $countryIds): self
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId[]|null
     */
    public function getCustomerGroupIds(): ?array
    {
    }
    /**
     * @return $this
     */
    public function setCustomerGroupIds(?array $customerGroupIds): self
    {
    }
    /**
     * @return int[]|null
     */
    public function getCompatibleDiscountTypeIds(): ?array
    {
    }
    /**
     * @param int[]|null $compatibleDiscountTypeIds
     */
    public function setCompatibleDiscountTypeIds(?array $compatibleDiscountTypeIds): self
    {
    }
}
