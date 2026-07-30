<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines interface to handle @see RemoveAllRelatedProductsCommand
 */
interface RemoveAllRelatedProductsHandlerInterface
{
    /**
     * @param RemoveAllRelatedProductsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\RemoveAllRelatedProductsCommand $command): void;
}
