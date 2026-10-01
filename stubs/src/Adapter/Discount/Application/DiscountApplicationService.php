<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\Application;

/**
 * Service for determining which discounts should be applied to a cart and in what order
 *
 * This is the single source of truth for discount application logic.
 * It handles:
 * - Compatibility checking between discounts
 * - Priority-based ordering of discounts
 * - Resolving conflicts when incompatible discounts are added
 */
class DiscountApplicationService
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountTypeRepository $discountTypeRepository)
    {
    }
    /**
     * Determine which discounts should be applied when adding a new discount to the cart
     *
     * @param array<int> $existingDiscountIds Array of discount IDs currently in the cart
     */
    public function determineDiscountsToApply(int $newDiscountId, array $existingDiscountIds): \PrestaShop\PrestaShop\Adapter\Discount\Application\DiscountApplicationResult
    {
    }
}
