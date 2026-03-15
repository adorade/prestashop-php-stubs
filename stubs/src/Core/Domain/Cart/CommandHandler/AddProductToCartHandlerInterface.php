<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Interface for handling addProductToCart command
 */
interface AddProductToCartHandlerInterface
{
    /**
     * @param AddProductToCartCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\AddProductToCartCommand $command): void;
}
