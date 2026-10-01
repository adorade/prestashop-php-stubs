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
     * @throws \PrestaShop\PrestaShop\Core\Domain\CartRule\Exception\CartRuleConstraintException
     */
    public function __construct(array $cartRuleIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId[]
     */
    public function getCartRuleIds(): array
    {
    }
}
