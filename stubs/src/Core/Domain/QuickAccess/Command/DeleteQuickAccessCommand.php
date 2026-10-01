<?php

namespace PrestaShop\PrestaShop\Core\Domain\QuickAccess\Command;

class DeleteQuickAccessCommand
{
    public function __construct(int $quickAccessId)
    {
    }
    public function getQuickAccessId(): \PrestaShop\PrestaShop\Core\Domain\QuickAccess\ValueObject\QuickAccessId
    {
    }
}
