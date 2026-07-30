<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler;

/**
 * Handles command for customer thread bulk deletion
 */
class BulkDeleteCustomerThreadHandler implements \PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler\BulkDeleteCustomerThreadHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Repository\CustomerThreadRepository $customerThreadRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Command\BulkDeleteCustomerThreadCommand $command): void
    {
    }
}
