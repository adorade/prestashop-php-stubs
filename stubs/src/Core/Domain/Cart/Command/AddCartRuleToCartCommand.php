<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

/**
 * Adds cart rule to given cart.
 */
class AddCartRuleToCartCommand
{
    /**
     * @param int $cartId
     * @param int $cartRuleId
     */
    public function __construct($cartId, $cartRuleId)
    {
    }
    /**
     * @return CartId
     */
    public function getCartId()
    {
    }
    /**
     * @return CartRuleId
     */
    public function getCartRuleId()
    {
    }
}
