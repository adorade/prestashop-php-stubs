<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Image\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class SetProductImagesForAllShopHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Image\CommandHandler\SetProductImagesForAllShopHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Image\Command\SetProductImagesForAllShopCommand $command): void
    {
    }
}
