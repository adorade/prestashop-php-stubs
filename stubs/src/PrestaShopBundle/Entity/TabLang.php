<?php

namespace PrestaShopBundle\Entity;

/**
 * TabLang.
 *
 * @ORM\Table()
 *
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\TabLangRepository")
 */
class TabLang
{
    public function getTab(): \PrestaShopBundle\Entity\Tab
    {
    }
    public function setTab(\PrestaShopBundle\Entity\Tab $tab): static
    {
    }
    public function setName(string $name): static
    {
    }
    public function getName(): string
    {
    }
    public function setLang(\PrestaShopBundle\Entity\Lang $lang): static
    {
    }
    public function getLang(): \PrestaShopBundle\Entity\Lang
    {
    }
}
