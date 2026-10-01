<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Interface for service that handles sending cart to customer.
 *
 * @deprecated Since 9.0 and will be removed in the next major.
 */
interface SendCartToCustomerHanlderInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\Command\SendCartToCustomerCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\SendCartToCustomerCommand $command);
}
