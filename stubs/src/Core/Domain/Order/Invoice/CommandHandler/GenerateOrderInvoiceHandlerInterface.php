<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Invoice\CommandHandler;

/**
 * Interface for service that handles generating invoice for order.
 */
interface GenerateOrderInvoiceHandlerInterface
{
    /**
     * @param GenerateInvoiceCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Invoice\Command\GenerateInvoiceCommand $command);
}
