<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that handles issuing cancel product for given order
 */
interface CancelOrderProductHandlerInterface
{
    /**
     * @param CancelOrderProductCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\CancelOrderProductCommand $command);
}
