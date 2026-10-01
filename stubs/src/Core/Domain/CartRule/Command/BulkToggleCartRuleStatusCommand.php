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
     * @throws \PrestaShop\PrestaShop\Core\Domain\CartRule\Exception\CartRuleConstraintException
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
     * @return \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId[]
     */
    public function getCartRuleIds(): array
    {
    }
}
