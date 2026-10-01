<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract to handle @see RemoveAllAssociatedProductCategoriesCommand
 */
interface RemoveAllAssociatedProductCategoriesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Command\RemoveAllAssociatedProductCategoriesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\RemoveAllAssociatedProductCategoriesCommand $command): void;
}
