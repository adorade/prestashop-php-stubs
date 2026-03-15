<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction;

/**
 * Cart rule action that gives gift product.
 * It cannot have percentage or amount discount, or free shipping.
 */
final class GiftProductAction implements \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionInterface
{
    /**
     * @param GiftProduct $giftProduct
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\GiftProduct $giftProduct)
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
