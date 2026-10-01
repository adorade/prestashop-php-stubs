<?php

namespace PrestaShop\PrestaShop\Core\Domain\QuickAccess\Query;

class GetQuickAccessForEditing
{
    public function __construct(int $quickAccessId)
    {
    }
    public function getQuickAccessId(): \PrestaShop\PrestaShop\Core\Domain\QuickAccess\ValueObject\QuickAccessId
    {
    }
}
