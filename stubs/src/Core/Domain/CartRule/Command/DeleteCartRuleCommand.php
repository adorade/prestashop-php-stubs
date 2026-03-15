<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\Command;

/**
 * Deletes cart rule
 */
class DeleteCartRuleCommand
{
    /**
     * @param int $cartRuleId
     *
     * @throws CartRuleConstraintException
     */
    public function __construct(int $cartRuleId)
    {
    }
    /**
     * @return CartRuleId
     */
    public function getCartRuleId(): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId
    {
    }
}
