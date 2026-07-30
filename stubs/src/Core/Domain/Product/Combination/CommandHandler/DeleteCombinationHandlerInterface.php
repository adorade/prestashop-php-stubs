<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler;

/**
 * Defines contract to handle @see DeleteCombinationCommand
 */
interface DeleteCombinationHandlerInterface
{
    /**
     * @param DeleteCombinationCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\DeleteCombinationCommand $command): void;
}
