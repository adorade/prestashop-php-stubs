<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult;

class EditableCartRuleActions
{
    public function __construct(bool $freeShipping, \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRuleReduction $reduction, ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $giftProductId, ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $giftCombinationId)
    {
    }
    /**
     * @return bool
     */
    public function isFreeShipping(): bool
    {
    }
    /**
     * @return EditableCartRuleReduction
     */
    public function getReduction(): \PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult\EditableCartRuleReduction
    {
    }
    /**
     * @return ProductId|null
     */
    public function getGiftProductId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return CombinationId|null
     */
    public function getGiftCombinationId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
}
