<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Interface for service that updates addresses for given cart
 */
interface UpdateCartAddressesHandlerInterface
{
    /**
     * @param UpdateCartAddressesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\UpdateCartAddressesCommand $command);
}
