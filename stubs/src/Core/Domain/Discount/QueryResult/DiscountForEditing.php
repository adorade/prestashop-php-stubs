<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\QueryResult;

class DiscountForEditing
{
    public function __construct(private readonly int $discountId, private readonly array $localizedNames, private readonly int $priority, private readonly bool $active, private readonly \DateTimeImmutable $validFrom, private readonly ?\DateTimeImmutable $validTo, private readonly ?int $totalQuantity, private readonly ?int $remainingQuantity, private readonly int $quantityUsedInOrders, private readonly ?int $quantityPerUser, private readonly string $description, private readonly string $code, private readonly ?int $customerId, private readonly bool $highlightInCart, private readonly bool $allowPartialUse, private readonly string $type, private readonly ?\PrestaShop\Decimal\DecimalNumber $reductionPercent, ?\PrestaShop\Decimal\DecimalNumber $reductionAmount, ?int $reductionAmountCurrencyId, ?bool $reductionAmountTaxIncluded, private readonly bool $cheapestProduct, private readonly ?int $reductionProductId, private readonly ?int $giftProductId, private readonly ?int $giftCombinationId, private readonly int $minimumProductQuantity, private readonly array $productConditions, ?\PrestaShop\Decimal\DecimalNumber $minimumAmount, ?int $minimumAmountCurrencyId, ?bool $minimumAmountTaxIncluded, ?bool $minimumAmountShippingIncluded, private readonly array $carrierIds, private readonly array $countryIds, private readonly array $customerGroupIds, private readonly array $compatibleDiscountTypeIds)
    {
    }
    public function getDiscountId(): int
    {
    }
    public function getPriority(): int
    {
    }
    public function isActive(): bool
    {
    }
    public function getValidFrom(): \DateTimeImmutable
    {
    }
    public function getValidTo(): ?\DateTimeImmutable
    {
    }
    public function getTotalQuantity(): ?int
    {
    }
    public function getRemainingQuantity(): ?int
    {
    }
    public function getQuantityUsedInOrders(): int
    {
    }
    public function getQuantityPerUser(): ?int
    {
    }
    public function getDescription(): string
    {
    }
    public function getCode(): string
    {
    }
    public function getCustomerId(): ?int
    {
    }
    public function isHighlightInCart(): bool
    {
    }
    public function isAllowPartialUse(): bool
    {
    }
    public function getType(): \PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountType
    {
    }
    public function getReductionPercent(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    public function getReductionAmount(): ?\PrestaShop\PrestaShop\Core\Domain\QueryResult\Money
    {
    }
    public function getCheapestProduct(): bool
    {
    }
    public function getReductionProductId(): ?int
    {
    }
    public function getGiftProductId(): ?int
    {
    }
    public function getGiftCombinationId(): ?int
    {
    }
    public function getLocalizedNames(): array
    {
    }
    public function getMinimumProductQuantity(): int
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Discount\ProductRuleGroup[]
     */
    public function getProductConditions(): array
    {
    }
    public function getMinimumAmount(): ?\PrestaShop\PrestaShop\Core\Domain\Discount\QueryResult\MinimumAmount
    {
    }
    /**
     * @return int[]
     */
    public function getCarrierIds(): array
    {
    }
    /**
     * @return int[]
     */
    public function getCountryIds(): array
    {
    }
    /**
     * @return int[]
     */
    public function getCustomerGroupIds(): array
    {
    }
    /**
     * @return int[]
     */
    public function getCompatibleDiscountTypeIds(): array
    {
    }
}
