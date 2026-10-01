<?php

namespace PrestaShop\PrestaShop\Adapter\CartRule;

/**
 * Handles disabling of cart rules when their eligibility conditions are removed
 * (e.g. a customer or customer group is deleted).
 */
class CartRuleDisablerService
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateChecker)
    {
    }
    /**
     * On customer deletion: disable cart rules that were restricted to this customer.
     * Resets the customer restriction so the discount is no longer tied to the deleted customer,
     * and disables it so the merchant can review and re-enable it manually.
     *
     * @param int $customerId
     */
    public function disableCartRulesThatHadCustomer(int $customerId): bool
    {
    }
    /**
     * On group deletion: disable cart rules that had only this group as their restriction.
     * Clears the group restriction and disables the discount so the merchant can review it.
     * Must be called BEFORE the group rows are removed from the cart_rule_group table.
     *
     * @param int $groupId
     */
    public function disableCartRulesThatHadOnlyGroup(int $groupId): bool
    {
    }
    /**
     * Disables all active free gift discounts that use the given product as their gift.
     * Called when a product becomes ineligible as a free gift (minimum quantity changed,
     * required customization added) or when the product is deleted.
     */
    public function disableCartRulesThatUsedProductAsGift(int $productId): void
    {
    }
}
