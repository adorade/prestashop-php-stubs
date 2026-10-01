<?php

namespace PrestaShop\PrestaShop\Adapter\State\CommandHandler;

/**
 * Handles command which updates zone for multiple states
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class BulkUpdateStateZoneHandler implements \PrestaShop\PrestaShop\Core\Domain\State\CommandHandler\BulkUpdateStateZoneHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\BulkUpdateStateZoneCommand $command): void
    {
    }
}
