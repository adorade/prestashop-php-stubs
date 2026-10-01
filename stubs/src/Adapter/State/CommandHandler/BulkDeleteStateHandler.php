<?php

namespace PrestaShop\PrestaShop\Adapter\State\CommandHandler;

/**
 * Handles command that bulk delete states
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class BulkDeleteStateHandler implements \PrestaShop\PrestaShop\Core\Domain\State\CommandHandler\BulkDeleteStateHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\BulkDeleteStateCommand $command): void
    {
    }
}
