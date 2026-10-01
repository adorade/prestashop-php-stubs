<?php

namespace PrestaShop\PrestaShop\Adapter\Zone\CommandHandler;

/**
 * Handles command that delete zone
 */
final class DeleteZoneHandler implements \PrestaShop\PrestaShop\Core\Domain\Zone\CommandHandler\DeleteZoneHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Command\DeleteZoneCommand $command): void
    {
    }
}
