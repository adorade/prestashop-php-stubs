<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Interface for service that handles creating empty customer cart.
 */
interface CreateEmptyCustomerCartHandlerInterface
{
    /**
     * @param CreateEmptyCustomerCartCommand $command
     *
     * @return CartId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\CreateEmptyCustomerCartCommand $command);
}
