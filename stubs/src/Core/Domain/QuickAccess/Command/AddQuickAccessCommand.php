<?php

namespace PrestaShop\PrestaShop\Core\Domain\QuickAccess\Command;

/**
 * Creates a quick access link.
 *
 * Handler must enforce uniqueness by link URL since there is no DB UNIQUE KEY on the column.
 */
class AddQuickAccessCommand
{
    /**
     * @param array<int, string> $localizedNames Lang-ID-keyed name translations
     */
    public function __construct(array $localizedNames, string $link, bool $newWindow)
    {
    }
    /** @return array<int, string> */
    public function getLocalizedNames(): array
    {
    }
    public function getLink(): string
    {
    }
    public function isNewWindow(): bool
    {
    }
}
