<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler;

/**
 * Handles command for customer thread deletion
 */
class DeleteCustomerThreadHandler implements \PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler\DeleteCustomerThreadHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Repository\CustomerThreadRepository $customerThreadRepository)
    {
    }
    /**
     * @param DeleteCustomerThreadCommand $command
     *
     * @return void
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Command\DeleteCustomerThreadCommand $command): void
    {
    }
}
