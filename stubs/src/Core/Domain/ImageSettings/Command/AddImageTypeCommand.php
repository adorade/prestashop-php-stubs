<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command;

/**
 * Adds new image type with provided data.
 */
class AddImageTypeCommand
{
    public function __construct(private readonly string $name, private readonly int $width, private readonly int $height, private readonly bool $products, private readonly bool $categories, private readonly bool $manufacturers, private readonly bool $suppliers, private readonly bool $stores)
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
