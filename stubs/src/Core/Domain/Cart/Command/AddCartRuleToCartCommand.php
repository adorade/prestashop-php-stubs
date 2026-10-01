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
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
     */
    public function getCartId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId
     */
    public function getCartRuleId()
    {
    }
}
