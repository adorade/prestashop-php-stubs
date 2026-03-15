<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that handles changing orders status
 */
interface BulkChangeOrderStatusHandlerInterface
{
    /**
     * @param BulkChangeOrderStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\BulkChangeOrderStatusCommand $command);
}
