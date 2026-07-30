<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler;

/**
 * Defines contract to handle @see SetCombinationImagesCommand
 */
interface SetCombinationImagesHandlerInterface
{
    /**
     * @param SetCombinationImagesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\SetCombinationImagesCommand $command): void;
}
