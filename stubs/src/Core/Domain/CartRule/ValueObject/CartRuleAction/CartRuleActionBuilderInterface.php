<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction;

/**
 * Describes a builder which builds cart rule actions.
 */
interface CartRuleActionBuilderInterface
{
    /**
     * Set free shipping for cart rule action.
     *
     * @param bool $freeShipping
     *
     * @return CartRuleActionBuilderInterface
     */
    public function setFreeShipping(bool $freeShipping): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionBuilderInterface;
    /**
     * Set percentage discount for cart rule action.
     *
     * @param PercentageDiscount $percentageDiscount
     *
     * @return CartRuleActionBuilderInterface
     */
    public function setPercentageDiscount(\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\PercentageDiscount $percentageDiscount): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionBuilderInterface;
    /**
     * Set amount discount for cart rule action.
     *
     * @param MoneyAmountCondition $amount
     *
     * @return CartRuleActionBuilderInterface
     */
    public function setAmountDiscount(\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\MoneyAmountCondition $amount): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionBuilderInterface;
    /**
     * Set the gift product for cart rule action.
     *
     * @param GiftProduct $giftProduct
     *
     * @return CartRuleActionBuilderInterface
     */
    public function setGiftProduct(\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\GiftProduct $giftProduct): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionBuilderInterface;
    /**
     * Build the cart rule action.
     *
     * @return CartRuleActionInterface
     */
    public function build(): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionInterface;
}
