<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler;

/**
 * Defines contract for BulkDeleteAddressHandler
 */
interface BulkDeleteAddressHandlerInterface
{
    /**
     * @param BulkDeleteAddressCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\BulkDeleteAddressCommand $command);
}
