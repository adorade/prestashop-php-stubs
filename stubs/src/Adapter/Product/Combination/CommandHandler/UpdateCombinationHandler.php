<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler;

/**
 * Handles the @see UpdateCombinationCommand using legacy object model
 */
class UpdateCombinationHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler\UpdateCombinationHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\Filler\CombinationFillerInterface $combinationFiller, \PrestaShop\PrestaShop\Adapter\Product\Combination\Update\DefaultCombinationUpdater $defaultCombinationUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\UpdateCombinationCommand $command): void
    {
    }
}
