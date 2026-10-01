<?php

namespace PrestaShop\PrestaShop\Core\Domain\QuickAccess\Command;

/**
 * Partial-update command: only fields explicitly set via setters are persisted.
 * A null getter value means "not changed in this request", not "set to null in DB".
 */
class EditQuickAccessCommand
{
    public function __construct(int $quickAccessId)
    {
    }
    public function getQuickAccessId(): \PrestaShop\PrestaShop\Core\Domain\QuickAccess\ValueObject\QuickAccessId
    {
    }
    /** @return array<int, string>|null */
    public function getLocalizedNames(): ?array
    {
    }
    /** @param array<int, string> $localizedNames */
    public function setLocalizedNames(array $localizedNames): self
    {
    }
    public function getLink(): ?string
    {
    }
    public function setLink(string $link): self
    {
    }
    public function getNewWindow(): ?bool
    {
    }
    public function setNewWindow(bool $newWindow): self
    {
    }
}
