<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\Command;

/**
 * Deletes cart rules in bulk action
 */
class BulkDeleteCartRuleCommand
{
    /**
     * @param int[] $cartRuleIds
     *
     * @throws CartRuleConstraintException
     */
    public function __construct(array $cartRuleIds)
    {
    }
    /**
     * @return CartRuleId[]
     */
    public function getCartRuleIds(): array
    {
    }
}
