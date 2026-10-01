<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that handling updating shipping details for given order.
 */
interface UpdateOrderShippingDetailsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\Command\UpdateOrderShippingDetailsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\UpdateOrderShippingDetailsCommand $command);
}
