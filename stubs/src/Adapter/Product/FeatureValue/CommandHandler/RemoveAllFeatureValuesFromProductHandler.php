<?php

namespace PrestaShop\PrestaShop\Adapter\Product\FeatureValue\CommandHandler;

/**
 * Handles @see RemoveAllFeatureValuesFromProductCommand using legacy object model
 */
class RemoveAllFeatureValuesFromProductHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\CommandHandler\RemoveAllFeatureValuesFromProductHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\FeatureValue\Update\ProductFeatureValueUpdater $productFeatureValueUpdater)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\FeatureValue\Command\RemoveAllFeatureValuesFromProductCommand $command): void
    {
    }
}
