<?php

namespace PrestaShopBundle\Entity;

/**
 * Attribute.
 *
 * @ORM\Table(
 *     indexes={@ORM\Index(name="attribute_group", columns={"id_attribute_group"})}
 * )
 *
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\AttributeRepository")
 */
class Attribute
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    public function getId(): int
    {
    }
    public function setColor(string $color): static
    {
    }
    public function getColor(): string
    {
    }
    public function setPosition(int $position): static
    {
    }
    public function getPosition(): int
    {
    }
    public function setAttributeGroup(\PrestaShopBundle\Entity\AttributeGroup $attributeGroup): static
    {
    }
    public function getAttributeGroup(): \PrestaShopBundle\Entity\AttributeGroup
    {
    }
    public function addShop(\PrestaShopBundle\Entity\Shop $shop): static
    {
    }
    public function removeShop(\PrestaShopBundle\Entity\Shop $shop): void
    {
    }
    /**
     * Get shops.
     *
     * @return \Doctrine\Common\Collections\Collection<Shop>
     */
    public function getShops(): \Doctrine\Common\Collections\Collection
    {
    }
    public function addAttributeLang(\PrestaShopBundle\Entity\AttributeLang $attributeLang): static
    {
    }
    public function removeAttributeLang(\PrestaShopBundle\Entity\AttributeLang $attributeLang): void
    {
    }
    /**
     * @return \Doctrine\Common\Collections\Collection<AttributeLang>
     */
    public function getAttributeLangs(): \Doctrine\Common\Collections\Collection
    {
    }
}
