<?php

namespace PrestaShop\PrestaShop\Adapter\QuickAccess\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class BulkDeleteQuickAccessHandler extends \PrestaShop\PrestaShop\Core\Domain\AbstractBulkCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\QuickAccess\CommandHandler\BulkDeleteQuickAccessHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\QuickAccess\Repository\QuickAccessRepository $repository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\QuickAccess\Command\BulkDeleteQuickAccessCommand $command): void
    {
    }
    protected function handleSingleAction(mixed $id, mixed $command): void
    {
    }
    protected function supports($id): bool
    {
    }
    protected function buildBulkException(array $caughtExceptions): \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface
    {
    }
}
