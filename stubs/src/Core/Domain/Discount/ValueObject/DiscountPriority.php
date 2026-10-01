<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject;

/**
 * Defines the priority order for discount application
 *
 * Lower priority value = applied first
 * Priority order: 1. Catalog (product_level), 2. Cart (cart_level), 3. Shipping (free_shipping), 4. Free gift (free_gift)
 */
class DiscountPriority
{
    // Priority values - lower number = higher priority (applied first)
    public const PRODUCT_LEVEL_PRIORITY = 1;
    // Catalog discounts
    public const CART_LEVEL_PRIORITY = 2;
    // Cart discounts
    public const ORDER_LEVEL_PRIORITY = 2;
    // Order discounts (same as cart)
    public const FREE_SHIPPING_PRIORITY = 3;
    // Shipping discounts
    public const FREE_GIFT_PRIORITY = 4;
    // Free gift discounts
    /**
     * Get priority value for a discount type
     */
    public static function getPriorityForType(string $discountType): int
    {
    }
    /**
     * Compare two discount types and return which has higher priority
     */
    public static function compare(string $type1, string $type2): int
    {
    }
    /**
     * Compare two discounts using full priority logic:
     * 1. Type priority (product > cart > shipping > gift)
     * 2. Priority field (lower number = higher priority)
     * 3. Creation date (older = higher priority)
     *
     * @param array $discount1 Discount data with 'discount_type', 'priority', 'date_add' keys
     * @param array $discount2 Discount data with 'discount_type', 'priority', 'date_add' keys
     */
    public static function compareDiscounts(array $discount1, array $discount2): int
    {
    }
    /**
     * Sort an array of discounts by their full priority (type, priority field, date)
     *
     * @param array $discounts Array of discount data with 'type', 'priority', 'date_add' keys
     *
     * @return array Sorted array of discounts
     */
    public static function sortByPriority(array $discounts): array
    {
    }
}
