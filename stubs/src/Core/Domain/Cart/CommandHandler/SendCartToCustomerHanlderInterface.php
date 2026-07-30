<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Interface for service that handles sending cart to customer.
 */
interface SendCartToCustomerHanlderInterface
{
    /**
     * @param SendCartToCustomerCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\SendCartToCustomerCommand $command);
}
