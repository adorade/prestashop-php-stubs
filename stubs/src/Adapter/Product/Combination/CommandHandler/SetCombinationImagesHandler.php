<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler;

/**
 * Handles @see SetCombinationImagesCommand using adapter udpater service
 */
final class SetCombinationImagesHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler\SetCombinationImagesHandlerInterface
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
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\SetCombinationImagesCommand $command): void
    {
    }
}
