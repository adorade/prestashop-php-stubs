<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that handles changing order delivery address.
 */
interface ChangeOrderDeliveryAddressHandlerInterface
{
    /**
     * @param ChangeOrderDeliveryAddressCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\ChangeOrderDeliveryAddressCommand $command);
}
