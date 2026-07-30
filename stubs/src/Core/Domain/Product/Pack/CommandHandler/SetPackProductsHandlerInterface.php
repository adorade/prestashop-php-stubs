<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Pack\CommandHandler;

/**
 * Defines contract to handle @see SetPackProductsCommand
 */
interface SetPackProductsHandlerInterface
{
    /**
     * @param SetPackProductsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Pack\Command\SetPackProductsCommand $command): void;
}
