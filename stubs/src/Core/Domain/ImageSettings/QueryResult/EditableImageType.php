<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\QueryResult;

/**
 * Transfers image type data for editing
 */
class EditableImageType
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageTypeId $imageTypeId, private readonly string $name, private readonly int $width, private readonly int $height, private readonly bool $products, private readonly bool $categories, private readonly bool $manufacturers, private readonly bool $suppliers, private readonly bool $stores)
    {
    }
    public function getImageTypeId(): \PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageTypeId
    {
    }
    public function getName(): string
    {
    }
    public function getWidth(): int
    {
    }
    public function getHeight(): int
    {
    }
    public function isProducts(): bool
    {
    }
    public function isCategories(): bool
    {
    }
    public function isManufacturers(): bool
    {
    }
    public function isSuppliers(): bool
    {
    }
    public function isStores(): bool
    {
    }
}
