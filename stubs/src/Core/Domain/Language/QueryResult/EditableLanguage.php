<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\QueryResult;

/**
 * Transfers editable language's data
 */
class EditableLanguage
{
    public function __construct(private readonly int $languageId, private readonly string $name, private readonly string $isoCode, private readonly string $tagIETF, private readonly string $locale, private readonly string $shortDateFormat, private readonly string $fullDateFormat, private readonly bool $isRtl, private readonly bool $isActive, private readonly array $shopAssociation)
    {
    }
    public function getLanguageId(): int
    {
    }
    public function getName(): string
    {
    }
    public function getIsoCode(): string
    {
    }
    public function getTagIETF(): string
    {
    }
    public function getLocale(): string
    {
    }
    public function getShortDateFormat(): string
    {
    }
    public function getFullDateFormat(): string
    {
    }
    public function isRtl(): bool
    {
    }
    public function isActive(): bool
    {
    }
    public function getShopAssociation(): array
    {
    }
}
