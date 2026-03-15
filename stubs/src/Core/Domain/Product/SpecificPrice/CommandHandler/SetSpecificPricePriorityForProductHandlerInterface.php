<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\CommandHandler;

/**
 * Defines contract to handle @see SetSpecificPricePriorityForProductCommand
 */
interface SetSpecificPricePriorityForProductHandlerInterface
{
    /**
     * @param SetSpecificPricePriorityForProductCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command\SetSpecificPricePriorityForProductCommand $command): void;
}
