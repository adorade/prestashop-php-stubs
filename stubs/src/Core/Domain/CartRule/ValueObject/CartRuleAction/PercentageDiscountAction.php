<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction;

/**
 * Cart rule action that gives percentage discount.
 * Percentage discount must have a percentage set.
 * It can optionally have free shipping and gift product.
 * It cannot have amount discount.
 */
final class PercentageDiscountAction implements \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionInterface
{
    /**
     * @param PercentageDiscount $percentageDiscount
     * @param bool $isFreeShipping
     * @param GiftProduct|null $giftProduct
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\PercentageDiscount $percentageDiscount, bool $isFreeShipping, \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\GiftProduct $giftProduct = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isFreeShipping(): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getPercentageDiscount(): ?\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\PercentageDiscount
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getAmountDiscount(): ?\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\MoneyAmountCondition
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getGiftProduct(): ?\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\GiftProduct
    {
    }
}
