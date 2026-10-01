<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command;

/**
 * Adds new image type with provided data.
 */
class AddImageTypeCommand
{
    /**
     * @param string $name Name of the image type
     * @param int $width Width of the image
     * @param int $height Height of the image
     * @param bool $products Whether the image type is used for products
     * @param bool $categories Whether the image type is used for categories
     * @param bool $manufacturers Whether the image type is used for manufacturers
     * @param bool $suppliers Whether the image type is used for suppliers
     * @param bool $stores Whether the image type is used for stores
     * @param value-of<\PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageFitment::AVAILABLE_VALUES> $imageFitment
     */
    public function __construct(private readonly string $name, private readonly int $width, private readonly int $height, private readonly bool $products, private readonly bool $categories, private readonly bool $manufacturers, private readonly bool $suppliers, private readonly bool $stores, private readonly string $imageFitment = \PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageFitment::FIT)
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
    /**
     * Gets the image fitment used when generating thumbnails.
     *
     * @return value-of<\PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageFitment::AVAILABLE_VALUES>
     */
    public function getImageFitment(): string
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
