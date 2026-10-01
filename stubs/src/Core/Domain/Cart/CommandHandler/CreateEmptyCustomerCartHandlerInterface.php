<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Interface for service that handles creating empty customer cart.
 */
interface CreateEmptyCustomerCartHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\Command\CreateEmptyCustomerCartCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\CreateEmptyCustomerCartCommand $command);
}
