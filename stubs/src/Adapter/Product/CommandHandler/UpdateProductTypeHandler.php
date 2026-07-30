<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * Handle @see UpdateProductTypeCommand
 */
class UpdateProductTypeHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\UpdateProductTypeHandlerInterface
{
    /**
     * @param ProductTypeUpdater $productTypeUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Update\ProductTypeUpdater $productTypeUpdater)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductTypeCommand $command): void
    {
    }
}
