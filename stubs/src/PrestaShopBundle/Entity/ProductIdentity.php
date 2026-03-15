<?php

namespace PrestaShopBundle\Entity;

class ProductIdentity
{
    /**
     * @param int $productId
     * @param int $combinationId
     */
    public function __construct($productId, $combinationId = 0)
    {
    }
    /**
     * @param array $identifiers
     *
     * @return ProductIdentity
     */
    public static function fromArray(array $identifiers)
    {
    }
    /**
     * @return mixed
     */
    public function getProductId()
    {
    }
    /**
     * @return int
     */
    public function getCombinationId()
    {
    }
}
