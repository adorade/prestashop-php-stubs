<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * Handles the @see UpdateProductCommand using legacy object model
 */
class UpdateProductHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\UpdateProductHandlerInterface
{
    /**
     * @param ProductFillerInterface $productUpdatablePropertyFiller
     * @param ProductRepository $productRepository
     * @param ProductIndexationUpdater $productIndexationUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Update\Filler\ProductFillerInterface $productUpdatablePropertyFiller, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Update\ProductIndexationUpdater $productIndexationUpdater)
    {
    }
    /**
     * @param UpdateProductCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductCommand $command): void
    {
    }
}
