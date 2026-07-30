<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject;

/**
 * Gift product VO
 */
class GiftProduct
{
    /**
     * @param int $productId
     * @param int|null $productAttributeId
     *
     * @throws CartRuleConstraintException
     */
    public function __construct(int $productId, int $productAttributeId = null)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return int|null
     */
    public function getProductAttributeId(): ?int
    {
    }
}
