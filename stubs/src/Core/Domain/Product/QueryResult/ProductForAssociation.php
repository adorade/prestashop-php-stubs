<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

class ProductForAssociation
{
    public function __construct(private readonly int $productId, private readonly string $name, private readonly string $reference, private readonly string $imageUrl, private readonly string $productType)
    {
    }
    public function getProductId(): int
    {
    }
    public function getName(): string
    {
    }
    public function getReference(): string
    {
    }
    public function getImageUrl(): string
    {
    }
    public function getProductType(): string
    {
    }
}
