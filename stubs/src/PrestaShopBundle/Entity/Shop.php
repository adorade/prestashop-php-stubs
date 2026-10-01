<?php

namespace PrestaShopBundle\Entity;

/**
 * Shop.
 *
 * @ORM\Table()
 *
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\ShopRepository")
 */
class Shop
{
    public function __construct()
    {
    }
    public function getId(): int
    {
    }
    public function setName(string $name): static
    {
    }
    public function getName(): string
    {
    }
    public function setColor(string $color): static
    {
    }
    public function getColor(): string
    {
    }
    public function setIdCategory(int $idCategory): static
    {
    }
    public function getIdCategory(): int
    {
    }
    public function setThemeName(string $themeName): static
    {
    }
    public function getThemeName(): string
    {
    }
    public function setActive(bool $active): static
    {
    }
    public function getActive(): bool
    {
    }
    public function setDeleted(bool $deleted): static
    {
    }
    public function getDeleted(): bool
    {
    }
    public function setShopGroup(\PrestaShopBundle\Entity\ShopGroup $shopGroup): static
    {
    }
    public function getShopGroup(): \PrestaShopBundle\Entity\ShopGroup
    {
    }
    public function getShopUrls(): \Doctrine\Common\Collections\Collection
    {
    }
    public function hasMainUrl(): bool
    {
    }
}
