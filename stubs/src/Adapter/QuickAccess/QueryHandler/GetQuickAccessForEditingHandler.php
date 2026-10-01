<?php

namespace PrestaShop\PrestaShop\Adapter\QuickAccess\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetQuickAccessForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\QuickAccess\QueryHandler\GetQuickAccessForEditingHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\QuickAccess\Repository\QuickAccessRepository $repository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\QuickAccess\Query\GetQuickAccessForEditing $query): \PrestaShop\PrestaShop\Core\Domain\QuickAccess\QueryResult\EditableQuickAccess
    {
    }
}
