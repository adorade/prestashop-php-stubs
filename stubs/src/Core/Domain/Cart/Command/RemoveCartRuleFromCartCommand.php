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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartConstraintException
     */
    public function __construct(int $cartId, int $cartRuleId)
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
