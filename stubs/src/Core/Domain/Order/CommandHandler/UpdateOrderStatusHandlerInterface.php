<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that handles updating order status.
 */
interface UpdateOrderStatusHandlerInterface
{
    /**
     * @param UpdateOrderStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\UpdateOrderStatusCommand $command);
}
