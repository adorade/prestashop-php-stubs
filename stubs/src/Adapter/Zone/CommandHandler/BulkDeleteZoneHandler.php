<?php

namespace PrestaShop\PrestaShop\Adapter\Zone\CommandHandler;

/**
 * Handles command that bulk delete zones
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class BulkDeleteZoneHandler implements \PrestaShop\PrestaShop\Core\Domain\Zone\CommandHandler\BulkDeleteZoneHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Command\BulkDeleteZoneCommand $command): void
    {
    }
}
