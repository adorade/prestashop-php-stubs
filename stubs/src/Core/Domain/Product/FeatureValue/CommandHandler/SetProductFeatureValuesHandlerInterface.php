<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\CommandHandler;

/**
 * Defines contract to handle @see SetProductFeatureValuesCommand
 */
interface SetProductFeatureValuesHandlerInterface
{
    /**
     * @param SetProductFeatureValuesCommand $command
     *
     * @return FeatureValueId[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Command\SetProductFeatureValuesCommand $command): array;
}
