<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\CommandHandler;

/**
 * Defines contract to handle @see RemoveAllFeatureValuesFromProductCommand
 */
interface RemoveAllFeatureValuesFromProductHandlerInterface
{
    /**
     * @param RemoveAllFeatureValuesFromProductCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Command\RemoveAllFeatureValuesFromProductCommand $command): void;
}
