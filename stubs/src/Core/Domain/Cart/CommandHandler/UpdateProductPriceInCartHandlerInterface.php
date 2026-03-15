<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Interface for service that updates product price in cart.
 */
interface UpdateProductPriceInCartHandlerInterface
{
    /**
     * @param UpdateProductPriceInCartCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\UpdateProductPriceInCartCommand $command);
}
