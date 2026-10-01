<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract for AssignProductToCategoriesHandler
 */
interface SetAssociatedProductCategoriesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Command\SetAssociatedProductCategoriesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\SetAssociatedProductCategoriesCommand $command): void;
}
