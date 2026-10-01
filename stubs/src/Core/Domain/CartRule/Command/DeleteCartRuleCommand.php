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
     * @throws \PrestaShop\PrestaShop\Core\Domain\CartRule\Exception\CartRuleConstraintException
     */
    public function __construct(int $cartRuleId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId
     */
    public function getCartRuleId(): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId
    {
    }
}
