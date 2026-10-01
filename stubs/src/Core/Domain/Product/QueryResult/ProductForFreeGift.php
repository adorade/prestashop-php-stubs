<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

class ProductForFreeGift
{
    public function __construct(private readonly int $productId, private readonly string $name, private readonly string $reference, private readonly string $imageUrl, private readonly string $productType, private readonly bool $disabled, private readonly ?string $disabledReason)
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
    public function isDisabled(): bool
    {
    }
    public function getDisabledReason(): ?string
    {
    }
}
