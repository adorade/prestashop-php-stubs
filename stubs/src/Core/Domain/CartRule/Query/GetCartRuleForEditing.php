<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\Query;

/**
 * Gets cart rule for editing in Back Office
 */
class GetCartRuleForEditing
{
    /**
     * @param int $cartRuleId
     *
     * @throws CartRuleConstraintException
     */
    public function __construct(int $cartRuleId)
    {
    }
    /**
     * @return CartRuleId $cartRuleId
     */
    public function getCartRuleId(): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId
    {
    }
}
