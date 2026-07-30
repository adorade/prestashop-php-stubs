<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Stock\CommandHandler;

/**
 * Defines contract to handle @var UpdateProductStockAvailableCommand
 */
interface UpdateProductStockHandlerInterface
{
    /**
     * @param UpdateProductStockAvailableCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Stock\Command\UpdateProductStockAvailableCommand $command): void;
}
