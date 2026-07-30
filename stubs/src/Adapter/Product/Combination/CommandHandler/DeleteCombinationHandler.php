<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler;

/**
 * Handles @see DeleteCombinationCommand using adapter udpater service
 */
class DeleteCombinationHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler\DeleteCombinationHandlerInterface
{
    /**
     * @param CombinationDeleter $combinationDeleter
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Combination\Update\CombinationDeleter $combinationDeleter)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\DeleteCombinationCommand $command): void
    {
    }
}
