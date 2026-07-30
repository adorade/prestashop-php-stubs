<?php

namespace PrestaShop\PrestaShop\Adapter\CartRule;

/**
 * Provides reusable methods for CartRule handlers
 */
abstract class AbstractCartRuleHandler
{
    /**
     * Gets legacy CartRule
     *
     * @param CartRuleId $cartRuleId
     *
     * @return CartRule
     *
     * @throws CartRuleException
     * @throws CartRuleNotFoundException
     */
    protected function getCartRule(\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId $cartRuleId): \CartRule
    {
    }
    /**
     * Deletes legacy CartRule
     *
     * @param CartRule $cartRule
     *
     * @return bool
     *
     * @throws CartRuleException
     */
    protected function deleteCartRule(\CartRule $cartRule)
    {
    }
    /**
     * Toggles legacy cart rule status
     *
     * @param CartRule $cartRule
     * @param bool $newStatus
     *
     * @return bool
     *
     * @throws CartRuleException
     */
    protected function toggleCartRuleStatus(\CartRule $cartRule, bool $newStatus): ?bool
    {
    }
}
