<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Pack\CommandHandler;

/**
 * Defines contract to handle @see RemoveAllProductsFromPackCommand
 */
interface RemoveAllProductsFromPackHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Pack\Command\RemoveAllProductsFromPackCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Pack\Command\RemoveAllProductsFromPackCommand $command): void;
}
