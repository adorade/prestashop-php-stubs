<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that handling updating shipping details for given order.
 */
interface UpdateOrderShippingDetailsHandlerInterface
{
    /**
     * @param UpdateOrderShippingDetailsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\UpdateOrderShippingDetailsCommand $command);
}
