<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command;

/**
 * Command that edits image type
 */
class EditImageTypeCommand
{
    public function __construct(int $imageTypeId)
    {
    }
    public function getImageTypeId(): \PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageTypeId
    {
    }
    public function getName(): ?string
    {
    }
    public function setName(string $name): self
    {
    }
    public function getWidth(): ?int
    {
    }
    public function setWidth(int $width): self
    {
    }
    public function getHeight(): ?int
    {
    }
    public function setHeight(int $height): self
    {
    }
    /**
     * Gets the image fitment used when generating thumbnails.
     *
     * @return value-of<\PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageFitment::AVAILABLE_VALUES>|null
     */
    public function getImageFitment(): ?string
    {
    }
    /**
     * Sets the image fitment used when generating thumbnails.
     *
     * @param value-of<\PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageFitment::AVAILABLE_VALUES> $imageFitment
     */
    public function setImageFitment(string $imageFitment): self
    {
    }
    public function isProducts(): ?bool
    {
    }
    public function setProducts(bool $products): self
    {
    }
    public function isCategories(): ?bool
    {
    }
    public function setCategories(bool $categories): self
    {
    }
    public function isManufacturers(): ?bool
    {
    }
    public function setManufacturers(bool $manufacturers): self
    {
    }
    public function isSuppliers(): ?bool
    {
    }
    public function setSuppliers(bool $suppliers): self
    {
    }
    public function isStores(): ?bool
    {
    }
    public function setStores(bool $stores): self
    {
    }
}
