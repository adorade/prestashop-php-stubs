<?php

namespace PrestaShop\PrestaShop\Core\Domain\QuickAccess\Command;

/**
 * Toggles the new_window flag. Partial update — only the new_window column is written.
 */
class ToggleQuickAccessNewWindowCommand
{
    public function __construct(int $quickAccessId)
    {
    }
    public function getQuickAccessId(): \PrestaShop\PrestaShop\Core\Domain\QuickAccess\ValueObject\QuickAccessId
    {
    }
}
