<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract to handle @see SetRelatedProductsCommand
 */
interface SetRelatedProductsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Command\SetRelatedProductsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\SetRelatedProductsCommand $command): void;
}
