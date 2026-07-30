<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Pack\QueryResult;

/**
 * Holds packed product data
 */
class PackedProductDetails
{
    /**
     * @var int
     */
    protected $productId;
    /**
     * @var string
     */
    protected $productName;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var int
     */
    protected $combinationId;
    /**
     * @var string
     */
    protected $reference;
    /**
     * @var string
     */
    protected $imageUrl;
    /**
     * @param int $productId
     * @param int $quantity
     * @param int $combinationId
     * @param string $productName
     * @param string $reference
     * @param string $imageUrl
     */
    public function __construct(int $productId, int $quantity, int $combinationId, string $productName, string $reference, string $imageUrl)
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
    public function getQuantity(): int
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
    public function getProductName(): string
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
