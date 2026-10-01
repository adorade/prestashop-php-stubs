<?php

namespace PrestaShop\PrestaShop\Adapter\Zone\CommandHandler;

/**
 * Handles command that delete zone
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class DeleteZoneHandler implements \PrestaShop\PrestaShop\Core\Domain\Zone\CommandHandler\DeleteZoneHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Command\DeleteZoneCommand $command): void
    {
    }
}
