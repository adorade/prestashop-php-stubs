<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler;

/**
 * Defines contract to handle @see UpdateCombinationStockAvailableCommand
 */
interface UpdateCombinationStockAvailableHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\UpdateCombinationStockAvailableCommand $command): void;
}
