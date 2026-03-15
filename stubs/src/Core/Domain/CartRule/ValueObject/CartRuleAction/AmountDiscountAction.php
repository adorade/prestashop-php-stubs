<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction;

/**
 * Cart rule action that gives amount discount.
 * Amount discount must have a money amount and currency.
 * It can optionally have free shipping and gift product.
 * It cannot have percentage discount.
 */
final class AmountDiscountAction implements \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionInterface
{
    /**
     * @param MoneyAmountCondition $moneyAmountCondition
     * @param bool $isFreeShipping
     * @param GiftProduct|null $giftProduct
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\MoneyAmountCondition $moneyAmountCondition, bool $isFreeShipping, \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\GiftProduct $giftProduct = null)
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
