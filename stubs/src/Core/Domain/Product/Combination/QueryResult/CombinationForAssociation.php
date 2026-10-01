<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\QueryResult;

class CombinationForAssociation
{
    /**
     * @param int $productId
     * @param int $combinationId
     * @param string $name
     * @param string $reference
     * @param string $imageUrl
     */
    public function __construct(int $productId, int $combinationId, string $name, string $reference, string $imageUrl)
    {
    }
    /**
     * @return int
     */
    public function getProductId(): int
    {
    }
    /**
     * @return int
     */
    public function getCombinationId(): int
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return string
     */
    public function getReference(): string
    {
    }
    /**
     * @return string
     */
    public function getImageUrl(): string
    {
    }
}
