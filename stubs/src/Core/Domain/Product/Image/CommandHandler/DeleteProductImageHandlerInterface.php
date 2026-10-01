<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\CommandHandler;

/**
 * Defines contract to handle @see DeleteProductImageCommand
 */
interface DeleteProductImageHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Image\Command\DeleteProductImageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Command\DeleteProductImageCommand $command): void;
}
