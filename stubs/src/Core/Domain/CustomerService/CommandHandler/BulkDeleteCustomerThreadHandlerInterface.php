<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler;

/**
 * Bulk delete customer thread
 */
interface BulkDeleteCustomerThreadHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Command\BulkDeleteCustomerThreadCommand $command): void;
}
