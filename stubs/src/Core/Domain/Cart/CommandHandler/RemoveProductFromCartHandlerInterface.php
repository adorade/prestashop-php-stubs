<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Interface for service that handles product removing from cart.
 */
interface RemoveProductFromCartHandlerInterface
{
    /**
     * @param RemoveProductFromCartCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\RemoveProductFromCartCommand $command);
}
