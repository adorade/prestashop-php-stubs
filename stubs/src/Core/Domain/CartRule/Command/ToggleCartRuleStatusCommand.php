<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\Command;

/**
 * Toggles cart rule status
 */
class ToggleCartRuleStatusCommand
{
    /**
     * @param int $cartRuleId
     * @param bool $expectedStatus
     */
    public function __construct(int $cartRuleId, bool $expectedStatus)
    {
    }
    /**
     * @return CartRuleId
     */
    public function getCartRuleId(): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId
    {
    }
    /**
     * @return bool
     */
    public function getExpectedStatus(): bool
    {
    }
}
