<?php

namespace PrestaShopBundle\Entity;

class ProductIdentity
{
    public function __construct(int $productId, int $combinationId = 0)
    {
    }
    public static function fromArray(array $identifiers): \PrestaShopBundle\Entity\ProductIdentity
    {
    }
    public function getProductId(): int
    {
    }
    public function getCombinationId(): int
    {
    }
}
