<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * @deprecated since 8.1 and will be removed in next major version.
 *
 * @internal
 */
class UpdateProductStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\UpdateProductStatusHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Update\ProductIndexationUpdater $productIndexationUpdater)
    {
    }
    /**
     * @param UpdateProductStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductStatusCommand $command)
    {
    }
}
