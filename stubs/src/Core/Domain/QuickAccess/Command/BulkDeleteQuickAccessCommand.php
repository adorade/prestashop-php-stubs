<?php

namespace PrestaShop\PrestaShop\Core\Domain\QuickAccess\Command;

class BulkDeleteQuickAccessCommand
{
    /** @param int[] $quickAccessIds */
    public function __construct(array $quickAccessIds)
    {
    }
    /** @return \PrestaShop\PrestaShop\Core\Domain\QuickAccess\ValueObject\QuickAccessId[] */
    public function getQuickAccessIds(): array
    {
    }
}
