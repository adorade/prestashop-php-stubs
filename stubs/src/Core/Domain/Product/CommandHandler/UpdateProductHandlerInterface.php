<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract to handle @see UpdateProductCommand
 */
interface UpdateProductHandlerInterface
{
    /**
     * @param UpdateProductCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductCommand $command): void;
}
