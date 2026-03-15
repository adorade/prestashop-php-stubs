<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler;

/**
 * Delete customer thread
 */
interface DeleteCustomerThreadHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Command\DeleteCustomerThreadCommand $command): void;
}
