<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction;

/**
 * Builds cart rule actions.
 */
final class CartRuleActionBuilder implements \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionBuilderInterface
{
    /**
     * {@inheritdoc}
     */
    public function setFreeShipping(bool $isFreeShipping): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionBuilderInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setPercentageDiscount(\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\PercentageDiscount $percentageDiscount): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionBuilderInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setAmountDiscount(\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\MoneyAmountCondition $amount): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionBuilderInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setGiftProduct(\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\GiftProduct $giftProduct): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionBuilderInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function build(): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionInterface
    {
    }
}
