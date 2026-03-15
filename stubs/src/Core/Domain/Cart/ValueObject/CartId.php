<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject;

/**
 * Cart identity
 */
class CartId
{
    /**
     * @param int $cartId
     *
     * @throws CartConstraintException if cart id is not valid
     */
    public function __construct($cartId)
    {
    }
    /**
     * @return int
     */
    public function getValue()
    {
    }
}
