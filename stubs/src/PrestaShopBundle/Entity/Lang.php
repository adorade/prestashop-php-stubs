<?php

namespace PrestaShopBundle\Entity;

/**
 * @ORM\Table()
 *
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\LangRepository")
 */
class Lang implements \PrestaShop\PrestaShop\Core\Language\LanguageInterface
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
    public function setName(string $name): static
    {
    }
    public function getName(): string
    {
    }
    public function setActive(bool $active): static
    {
    }
    public function getActive(): bool
    {
    }
    public function setIsoCode(string $isoCode): static
    {
    }
    public function getIsoCode(): string
    {
    }
    public function setLanguageCode(string $languageCode): static
    {
    }
    public function getLanguageCode(): string
    {
    }
    public function setDateFormatLite(string $dateFormatLite): static
    {
    }
    public function getDateFormatLite(): string
    {
    }
    public function getDateFormat(): string
    {
    }
    public function setDateFormatFull(string $dateFormatFull): static
    {
    }
    public function getDateFormatFull(): string
    {
    }
    public function getDateTimeFormat(): string
    {
    }
    public function setIsRtl(bool $isRtl): static
    {
    }
    public function getIsRtl(): bool
    {
    }
    public function isRTL(): bool
    {
    }
    public function getLocale(): string
    {
    }
    public function setLocale($locale): static
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
    public function getTranslations(): \Doctrine\Common\Collections\Collection
    {
    }
}
