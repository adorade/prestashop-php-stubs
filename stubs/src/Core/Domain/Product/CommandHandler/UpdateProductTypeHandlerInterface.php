<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract to handle @see UpdateProductTypeCommand
 */
interface UpdateProductTypeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductTypeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductTypeCommand $command): void;
}
