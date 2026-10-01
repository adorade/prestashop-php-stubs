<?php

namespace PrestaShop\PrestaShop\Adapter\State\CommandHandler;

/**
 * Handles command that toggles states status in bulk action
 */
class BulkToggleStateStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\State\CommandHandler\BulkToggleStateStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\BulkToggleStateStatusCommand $command): void
    {
    }
}
