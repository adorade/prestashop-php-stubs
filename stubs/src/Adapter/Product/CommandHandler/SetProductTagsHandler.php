<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * Handles UpdateProductTagsCommand using legacy object model
 */
final class SetProductTagsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\UpdateProductTagsHandlerInterface
{
    /**
     * @param ProductRepository $productRepository
     * @param ProductTagUpdater $productTagUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Update\ProductTagUpdater $productTagUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\SetProductTagsCommand $command): void
    {
    }
}
