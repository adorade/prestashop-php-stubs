<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler;

/**
 * Handles @see GenerateProductCombinationsCommand using legacy object model
 */
final class GenerateProductCombinationsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler\GenerateProductCombinationsHandlerInterface
{
    /**
     * @param CombinationCreator $combinationCreator
     * @param ProductSupplierUpdater $productSupplierUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Combination\Create\CombinationCreator $combinationCreator, \PrestaShop\PrestaShop\Adapter\Product\Update\ProductSupplierUpdater $productSupplierUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\GenerateProductCombinationsCommand $command): array
    {
    }
}
