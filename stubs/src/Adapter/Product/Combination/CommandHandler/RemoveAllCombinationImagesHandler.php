<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler;

/**
 * Handles @see RemoveAllCombinationImagesCommand using adapter udpater service
 */
final class RemoveAllCombinationImagesHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler\RemoveAllCombinationImagesHandlerInterface
{
    /**
     * @param CombinationImagesUpdater $combinationImagesUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Combination\Update\CombinationImagesUpdater $combinationImagesUpdater)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\RemoveAllCombinationImagesCommand $command): void
    {
    }
}
