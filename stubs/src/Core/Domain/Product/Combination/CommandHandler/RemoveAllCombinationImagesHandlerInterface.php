<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler;

/**
 * Defines contract to handle @see RemoveAllCombinationImagesCommand
 */
interface RemoveAllCombinationImagesHandlerInterface
{
    /**
     * @param RemoveAllCombinationImagesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\RemoveAllCombinationImagesCommand $command): void;
}
