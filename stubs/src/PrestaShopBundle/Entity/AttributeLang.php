<?php

namespace PrestaShopBundle\Entity;

/**
 * AttributeLang.
 *
 * @ORM\Table()
 *
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\AttributeLangRepository")
 */
class AttributeLang
{
    public function setName(string $name): static
    {
    }
    public function getName(): string
    {
    }
    public function setAttribute(\PrestaShopBundle\Entity\Attribute $attribute): static
    {
    }
    public function getAttribute(): \PrestaShopBundle\Entity\Attribute
    {
    }
    public function setLang(\PrestaShopBundle\Entity\Lang $lang): static
    {
    }
    public function getLang(): \PrestaShopBundle\Entity\Lang
    {
    }
}
