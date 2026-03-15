<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract for AssignProductToCategoriesHandler
 */
interface SetAssociatedProductCategoriesHandlerInterface
{
    /**
     * @param SetAssociatedProductCategoriesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\SetAssociatedProductCategoriesCommand $command): void;
}
