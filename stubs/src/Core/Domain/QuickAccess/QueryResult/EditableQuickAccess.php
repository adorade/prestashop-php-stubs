<?php

namespace PrestaShop\PrestaShop\Core\Domain\QuickAccess\QueryResult;

/**
 * Immutable DTO carrying quick access data for the edit form.
 * All properties use scalar types (int, string, bool, array) — no VOs — per CQRS QueryResult convention.
 */
class EditableQuickAccess
{
    /** @param array<int, string> $localizedNames Lang-ID-keyed name translations */
    public function __construct(private readonly int $quickAccessId, private readonly array $localizedNames, private readonly string $link, private readonly bool $newWindow)
    {
    }
    public function getQuickAccessId(): int
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
