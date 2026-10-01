<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract to handle @see UpdateProductsPositionsCommand
 */
interface UpdateProductsPositionsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductsPositionsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductsPositionsCommand $command): void;
}
