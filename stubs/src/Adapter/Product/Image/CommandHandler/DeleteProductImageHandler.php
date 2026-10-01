<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Image\CommandHandler;

/**
 * Handles @see DeleteProductImageCommand
 */
class DeleteProductImageHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Image\CommandHandler\DeleteProductImageHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Image\Update\ProductImageUpdater $productImageUpdater)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Command\DeleteProductImageCommand $command): void
    {
    }
}
