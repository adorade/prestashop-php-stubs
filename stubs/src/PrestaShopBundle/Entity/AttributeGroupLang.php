<?php

namespace PrestaShopBundle\Entity;

/**
 * AttributeGroupLang.
 *
 * @ORM\Table()
 *
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\AttributeGroupLangRepository")
 */
class AttributeGroupLang
{
    public function setName(string $name): static
    {
    }
    public function getName(): string
    {
    }
    public function setPublicName(string $publicName): static
    {
    }
    public function getPublicName(): string
    {
    }
    public function setAttributeGroup(\PrestaShopBundle\Entity\AttributeGroup $attributeGroup): static
    {
    }
    public function getAttributeGroup(): \PrestaShopBundle\Entity\AttributeGroup
    {
    }
    public function setLang(\PrestaShopBundle\Entity\Lang $lang): static
    {
    }
    public function getLang(): \PrestaShopBundle\Entity\Lang
    {
    }
}
