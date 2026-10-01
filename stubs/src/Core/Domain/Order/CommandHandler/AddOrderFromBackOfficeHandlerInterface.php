<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that adds new order.
 */
interface AddOrderFromBackOfficeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\Command\AddOrderFromBackOfficeCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\AddOrderFromBackOfficeCommand $command);
}
