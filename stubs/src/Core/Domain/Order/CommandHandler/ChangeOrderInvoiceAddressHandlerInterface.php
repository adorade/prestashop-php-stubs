<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that handles changing order invoice address.
 */
interface ChangeOrderInvoiceAddressHandlerInterface
{
    /**
     * @param ChangeOrderInvoiceAddressCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\ChangeOrderInvoiceAddressCommand $command);
}
