<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler;

/**
 * Defines contract for BulkDeleteImageTypeHandler
 */
interface BulkDeleteImageTypeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\BulkDeleteImageTypeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\BulkDeleteImageTypeCommand $command): void;
}
