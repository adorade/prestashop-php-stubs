<?php

namespace PrestaShopBundle\Entity;

/**
 * ShopGroup.
 *
 * @ORM\Table()
 *
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\ShopGroupRepository")
 */
class ShopGroup
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
    public function setShareCustomer(bool $shareCustomer): static
    {
    }
    public function getShareCustomer(): bool
    {
    }
    public function setShareOrder(bool $shareOrder): static
    {
    }
    public function getShareOrder(): bool
    {
    }
    public function setShareStock(bool $shareStock): static
    {
    }
    public function getShareStock(): bool
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
    /**
     * @return \Doctrine\Common\Collections\Collection<Shop>
     */
    public function getShops(): \Doctrine\Common\Collections\Collection
    {
    }
}
