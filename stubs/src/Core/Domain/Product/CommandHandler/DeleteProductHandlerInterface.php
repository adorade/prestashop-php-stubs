<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract to handle @see DeleteProductCommand
 */
interface DeleteProductHandlerInterface
{
    /**
     * @param DeleteProductCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\DeleteProductCommand $command): void;
}
