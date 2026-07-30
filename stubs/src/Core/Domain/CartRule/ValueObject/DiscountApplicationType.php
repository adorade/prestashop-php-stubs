<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject;

/**
 * Discount application type
 */
class DiscountApplicationType
{
    /**
     * Discount will be applied to order without shipping
     */
    public const ORDER_WITHOUT_SHIPPING = 'order_without_shipping';
    /**
     * Discount will be applied to specifically selected product
     */
    public const SPECIFIC_PRODUCT = 'specific_product';
    /**
     * Discount will be applied to cheapest product of the cart
     */
    public const CHEAPEST_PRODUCT = 'cheapest_product';
    /**
     * Discount will be applied to products selection from cart rule's conditions.
     */
    public const SELECTED_PRODUCTS = 'selected_products';
    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
    }
    /**
     * @return string
     */
    public function getValue(): string
    {
    }
}
