<?php

namespace PrestaShop\PrestaShop\Adapter\Title\CommandHandler;

/**
 * Handles command that bulk delete titles
 */
class BulkDeleteTitleHandler implements \PrestaShop\PrestaShop\Core\Domain\Title\CommandHandler\BulkDeleteTitleHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Title\Command\BulkDeleteTitleCommand $command): void
    {
    }
}
