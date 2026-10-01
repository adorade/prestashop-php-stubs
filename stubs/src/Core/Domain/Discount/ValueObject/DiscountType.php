<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject;

class DiscountType
{
    public const CART_LEVEL = 'cart_level';
    public const PRODUCT_LEVEL = 'product_level';
    public const FREE_GIFT = 'free_gift';
    public const FREE_SHIPPING = 'free_shipping';
    public const ORDER_LEVEL = 'order_level';
    public function __construct(private readonly string $value)
    {
    }
    public function getValue(): string
    {
    }
}
