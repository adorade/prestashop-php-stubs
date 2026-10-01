<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

final class RemoveAllProductTagsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\RemoveAllProductTagsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Update\ProductTagUpdater $productTagUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Update\ProductTagUpdater $productTagUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\RemoveAllProductTagsCommand $command): void
    {
    }
}
