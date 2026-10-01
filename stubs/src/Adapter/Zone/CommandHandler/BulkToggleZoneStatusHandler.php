<?php

namespace PrestaShop\PrestaShop\Adapter\Zone\CommandHandler;

/**
 * Handles command that toggles zones status in bulk action
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class BulkToggleZoneStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\Zone\CommandHandler\BulkToggleZoneStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Command\BulkToggleZoneStatusCommand $command): void
    {
    }
}
