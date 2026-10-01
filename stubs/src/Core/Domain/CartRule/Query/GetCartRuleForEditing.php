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
     * @throws \PrestaShop\PrestaShop\Core\Domain\CartRule\Exception\CartRuleConstraintException
     */
    public function __construct(int $cartRuleId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId $cartRuleId
     */
    public function getCartRuleId(): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId
    {
    }
}
