<?php

namespace PrestaShop\PrestaShop\Core\Domain\QuickAccess\QueryHandler;

interface GetQuickAccessForEditingHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\QuickAccess\Query\GetQuickAccessForEditing $query): \PrestaShop\PrestaShop\Core\Domain\QuickAccess\QueryResult\EditableQuickAccess;
}
