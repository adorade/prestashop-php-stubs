<?php

namespace PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class RemoveSpecificPricePriorityForProductHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\CommandHandler\RemoveSpecificPricePriorityForProductHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Update\SpecificPricePriorityUpdater $specificPricePriorityUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Update\SpecificPricePriorityUpdater $specificPricePriorityUpdater)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command\RemoveSpecificPricePriorityForProductCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command\RemoveSpecificPricePriorityForProductCommand $command): void
    {
    }
}
