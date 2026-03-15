<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

/**
 * Product identity.
 */
class ProductId
{
    /**
     * @param int $productId
     *
     * @throws ProductConstraintException
     */
    public function __construct($productId)
    {
    }
    /**
     * @return int
     */
    public function getValue()
    {
    }
}
