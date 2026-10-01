<?php

namespace PrestaShopBundle\Entity;

/**
 * Tab.
 *
 * @ORM\Table()
 *
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\TabRepository")
 */
class Tab
{
    public function __construct()
    {
    }
    public function getId(): int
    {
    }
    public function getIdParent(): int
    {
    }
    public function setIdParent(int $idParent): static
    {
    }
    public function getPosition(): int
    {
    }
    public function setPosition(int $position): static
    {
    }
    public function getModule(): ?string
    {
    }
    public function setModule(?string $module): static
    {
    }
    public function getClassName(): string
    {
    }
    public function setClassName(string $className): static
    {
    }
    public function getActive(): bool
    {
    }
    public function setActive(bool $active): static
    {
    }
    public function getIcon(): ?string
    {
    }
    public function setIcon(?string $icon): static
    {
    }
    /**
     * @return \Doctrine\Common\Collections\Collection<TabLang>
     */
    public function getTabLangs(): \Doctrine\Common\Collections\Collection
    {
    }
    public function getTabLangByLanguageId(int $languageId): ?\PrestaShopBundle\Entity\TabLang
    {
    }
    public function addTabLang(\PrestaShopBundle\Entity\TabLang $tabLang): static
    {
    }
    public function removeTabLang(\PrestaShopBundle\Entity\TabLang $tabLang): void
    {
    }
    public function getWording(): ?string
    {
    }
    public function setWording(?string $wording): static
    {
    }
    public function getWordingDomain(): ?string
    {
    }
    public function setWordingDomain(?string $wordingDomain): static
    {
    }
    public function getRouteName(): ?string
    {
    }
    public function setRouteName(?string $routeName): static
    {
    }
    public function isEnabled(): bool
    {
    }
    public function setEnabled(bool $enabled): static
    {
    }
}
