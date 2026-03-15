<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Product\CommandHandler;

/**
 * Interface for service that updates product in given order.
 */
interface UpdateProductInOrderHandlerInterface
{
    /**
     * @param UpdateProductInOrderCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Product\Command\UpdateProductInOrderCommand $command);
}
