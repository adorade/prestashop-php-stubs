<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\CommandHandler;

/**
 * Defines contract to handle @see UpdateProductImageCommand
 */
interface UpdateProductImageHandlerInterface
{
    /**
     * @param UpdateProductImageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Command\UpdateProductImageCommand $command): void;
}
