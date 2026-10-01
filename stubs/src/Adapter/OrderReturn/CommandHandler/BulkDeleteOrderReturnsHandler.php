<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturn\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class BulkDeleteOrderReturnsHandler extends \PrestaShop\PrestaShop\Core\Domain\AbstractBulkCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderReturn\CommandHandler\BulkDeleteOrderReturnsHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\OrderReturn\Repository\OrderReturnRepository $orderReturnRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\Command\BulkDeleteOrderReturnsCommand $command): void
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function handleSingleAction(mixed $id, mixed $command): void
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function supports($id): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function buildBulkException(array $caughtExceptions): \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface
    {
    }
}
