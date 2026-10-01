<?php

namespace PrestaShopBundle\Entity;

/**
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\ImageTypeRepository")
 *
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(columns={"name"})})
 *
 * @UniqueEntity({"name"})
 */
class ImageType
{
    public function getId(): int
    {
    }
    public function getName(): string
    {
    }
    public function setName(string $name): static
    {
    }
    public function getWidth(): int
    {
    }
    public function setWidth(int $width): static
    {
    }
    public function getHeight(): int
    {
    }
    public function setHeight(int $height): static
    {
    }
    public function isProducts(): bool
    {
    }
    public function setProducts(bool $products): static
    {
    }
    public function isCategories(): bool
    {
    }
    public function setCategories(bool $categories): static
    {
    }
    public function isManufacturers(): bool
    {
    }
    public function setManufacturers(bool $manufacturers): static
    {
    }
    public function isSuppliers(): bool
    {
    }
    public function setSuppliers(bool $suppliers): static
    {
    }
    public function isStores(): bool
    {
    }
    public function setStores(bool $stores): static
    {
    }
}
