<?php

namespace PrestaShop\PrestaShop\Adapter\QuickAccess\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteQuickAccessHandler implements \PrestaShop\PrestaShop\Core\Domain\QuickAccess\CommandHandler\DeleteQuickAccessHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\QuickAccess\Repository\QuickAccessRepository $repository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\QuickAccess\Command\DeleteQuickAccessCommand $command): void
    {
    }
}
