<?php

namespace PrestaShopBundle\Entity;

/**
 * AttributeGroup.
 *
 * @ORM\Table()
 *
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\AttributeGroupRepository")
 */
class AttributeGroup
{
    public function __construct()
    {
    }
    public function getId(): int
    {
    }
    public function setIsColorGroup(bool $isColorGroup): static
    {
    }
    public function getIsColorGroup(): bool
    {
    }
    public function setGroupType(string $groupType): static
    {
    }
    public function getGroupType(): string
    {
    }
    public function setPosition(int $position): static
    {
    }
    public function getPosition(): int
    {
    }
    /**
     * @return \Doctrine\Common\Collections\Collection<Attribute>
     */
    public function getAttributes(): \Doctrine\Common\Collections\Collection
    {
    }
    public function addShop(\PrestaShopBundle\Entity\Shop $shop): static
    {
    }
    public function removeShop(\PrestaShopBundle\Entity\Shop $shop): void
    {
    }
    public function getShops(): \Doctrine\Common\Collections\Collection
    {
    }
    public function addAttributeGroupLang(\PrestaShopBundle\Entity\AttributeGroupLang $attributeGroupLang): static
    {
    }
    public function removeAttributeGroupLang(\PrestaShopBundle\Entity\AttributeGroupLang $attributeGroupLang): void
    {
    }
    /**
     * @return \Doctrine\Common\Collections\Collection<AttributeGroupLang>
     */
    public function getAttributeGroupLangs(): \Doctrine\Common\Collections\Collection
    {
    }
}
