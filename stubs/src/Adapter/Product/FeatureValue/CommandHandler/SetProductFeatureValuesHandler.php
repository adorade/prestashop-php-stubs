<?php

namespace PrestaShop\PrestaShop\Adapter\Product\FeatureValue\CommandHandler;

/**
 * Handles @see SetProductFeatureValuesCommand using legacy object model
 */
class SetProductFeatureValuesHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\CommandHandler\SetProductFeatureValuesHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\FeatureValue\Update\ProductFeatureValueUpdater $productFeatureValueUpdater)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Command\SetProductFeatureValuesCommand $command): array
    {
    }
}
