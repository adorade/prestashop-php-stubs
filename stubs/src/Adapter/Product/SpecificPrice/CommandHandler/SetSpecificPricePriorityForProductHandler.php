<?php

namespace PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\CommandHandler;

/**
 * Handles @see SetSpecificPricePriorityForProductCommand using legacy obj model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class SetSpecificPricePriorityForProductHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\CommandHandler\SetSpecificPricePriorityForProductHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Update\SpecificPricePriorityUpdater $specificPricePriorityUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Update\SpecificPricePriorityUpdater $specificPricePriorityUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command\SetSpecificPricePriorityForProductCommand $command): void
    {
    }
}
