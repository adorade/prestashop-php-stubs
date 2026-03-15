<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction;

/**
 * Describes a cart rule action.
 */
interface CartRuleActionInterface
{
    /**
     * Check if this cart rule is giving free shipping.
     *
     * @return bool
     */
    public function isFreeShipping(): bool;
    /**
     * Get the amount discount, which this cart rule action is giving.
     *
     * @return MoneyAmountCondition|null
     */
    public function getAmountDiscount(): ?\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\MoneyAmountCondition;
    /**
     * Get the percentage discount, which this cart rule action is giving.
     *
     * @return PercentageDiscount|null
     */
    public function getPercentageDiscount(): ?\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\PercentageDiscount;
    /**
     * Get the gift product, which this cart rule action is giving.
     *
     * @return GiftProduct|null returns null when not applicable
     */
    public function getGiftProduct(): ?\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\GiftProduct;
}
