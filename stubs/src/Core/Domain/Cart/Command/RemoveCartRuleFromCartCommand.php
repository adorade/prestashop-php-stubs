<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

/**
 * Removes given cart rule from cart.
 */
class RemoveCartRuleFromCartCommand
{
    /**
     * @param int $cartId
     * @param int $cartRuleId
     *
     * @throws CartConstraintException
     */
    public function __construct(int $cartId, int $cartRuleId)
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
