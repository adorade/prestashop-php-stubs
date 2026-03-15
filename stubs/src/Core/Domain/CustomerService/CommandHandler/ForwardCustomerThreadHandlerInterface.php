<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler;

/**
 * Interface for service that forwards customer thread to another employee
 */
interface ForwardCustomerThreadHandlerInterface
{
    /**
     * @param ForwardCustomerThreadCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Command\ForwardCustomerThreadCommand $command);
}
