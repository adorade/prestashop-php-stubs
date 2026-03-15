<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Product\CommandHandler;

/**
 * Interface for service that handles adding product to an exiting order.
 */
interface AddProductToOrderHandlerInterface
{
    /**
     * @param AddProductToOrderCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Product\Command\AddProductToOrderCommand $command);
}
