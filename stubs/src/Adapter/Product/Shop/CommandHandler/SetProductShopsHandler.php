<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Shop\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class SetProductShopsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Shop\CommandHandler\SetProductShopsHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\ProductDeleter $productDeleter, \PrestaShop\PrestaShop\Adapter\Product\Update\ProductShopUpdater $productShopUpdater)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Shop\Command\SetProductShopsCommand $command): void
    {
    }
}
