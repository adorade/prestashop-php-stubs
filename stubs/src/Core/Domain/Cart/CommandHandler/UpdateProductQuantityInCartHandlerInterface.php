<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Interface for service that updates (increases or decreases) product quantity in cart
 */
interface UpdateProductQuantityInCartHandlerInterface
{
    /**
     * @param UpdateProductQuantityInCartCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\UpdateProductQuantityInCartCommand $command);
}
