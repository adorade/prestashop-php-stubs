<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction;

/**
 * Cart rule action that gives free shipping.
 * It cannot have percentage or amount discount.
 * It can optionally have gift product.
 */
final class FreeShippingAction implements \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionInterface
{
    /**
     * @param GiftProduct|null $giftProduct
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\GiftProduct $giftProduct = null)
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
