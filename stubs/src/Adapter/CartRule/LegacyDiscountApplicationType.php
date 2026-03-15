<?php

namespace PrestaShop\PrestaShop\Adapter\CartRule;

/**
 * Legacy discount application types, used in cart rules, are defined in this class.
 */
final class LegacyDiscountApplicationType
{
    /**
     * Discount is applied for selected products
     */
    public const SELECTED_PRODUCTS = -2;
    /**
     * Discount is applied to cheapest product
     */
    public const CHEAPEST_PRODUCT = -1;
    /**
     * Discount is applied to order without shipping
     */
    public const ORDER_WITHOUT_SHIPPING = 0;
}
