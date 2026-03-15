<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\Command;

/**
 * Toggles cart rule status in bulk action
 */
class BulkToggleCartRuleStatusCommand
{
    /**
     * @param int[] $cartRuleIds
     * @param bool $expectedStatus
     *
     * @throws CartRuleConstraintException
     */
    public function __construct(array $cartRuleIds, bool $expectedStatus)
    {
    }
    /**
     * @return bool
     */
    public function getExpectedStatus(): bool
    {
    }
    /**
     * @return CartRuleId[]
     */
    public function getCartRuleIds(): array
    {
    }
}
