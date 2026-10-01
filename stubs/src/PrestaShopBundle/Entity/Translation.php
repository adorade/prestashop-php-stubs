<?php

namespace PrestaShopBundle\Entity;

/**
 * Translation.
 *
 * @ORM\Table(
 *     indexes={@ORM\Index(name="key", columns={"domain"})},
 * )
 *
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\TranslationRepository")
 *
 * @PassVsprintf
 */
class Translation
{
    public function getId(): int
    {
    }
    public function getKey(): string
    {
    }
    public function getTranslation(): string
    {
    }
    public function getLang(): \PrestaShopBundle\Entity\Lang
    {
    }
    public function getDomain(): string
    {
    }
    public function setKey(string $key): static
    {
    }
    public function setTranslation(string $translation): static
    {
    }
    public function setLang(\PrestaShopBundle\Entity\Lang $lang): static
    {
    }
    public function setDomain(string $domain): static
    {
    }
    public function getTheme(): ?string
    {
    }
    public function setTheme(?string $theme): static
    {
    }
}
