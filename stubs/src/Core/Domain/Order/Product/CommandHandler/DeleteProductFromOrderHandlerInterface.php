<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Product\CommandHandler;

/**
 * Interface for service that handles deleting product from order.
 */
interface DeleteProductFromOrderHandlerInterface
{
    /**
     * @param DeleteProductFromOrderCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Product\Command\DeleteProductFromOrderCommand $command);
}
