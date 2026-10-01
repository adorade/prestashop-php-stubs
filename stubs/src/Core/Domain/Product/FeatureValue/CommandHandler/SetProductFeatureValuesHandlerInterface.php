<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\CommandHandler;

/**
 * Defines contract to handle @see SetProductFeatureValuesCommand
 */
interface SetProductFeatureValuesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Command\SetProductFeatureValuesCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Feature\ValueObject\FeatureValueId[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Command\SetProductFeatureValuesCommand $command): array;
}
