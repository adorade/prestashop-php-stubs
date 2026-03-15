<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that adds new order.
 */
interface AddOrderFromBackOfficeHandlerInterface
{
    /**
     * @param AddOrderFromBackOfficeCommand $command
     *
     * @return OrderId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\AddOrderFromBackOfficeCommand $command);
}
