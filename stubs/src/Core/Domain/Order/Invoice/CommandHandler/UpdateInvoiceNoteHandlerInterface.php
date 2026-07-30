<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Invoice\CommandHandler;

/**
 * Interface for service that handles updating invoice note
 */
interface UpdateInvoiceNoteHandlerInterface
{
    /**
     * @param UpdateInvoiceNoteCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Invoice\Command\UpdateInvoiceNoteCommand $command): void;
}
