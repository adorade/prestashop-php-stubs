<?php

namespace PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\CommandHandler;

class RemoveSpecificPricePriorityForProductHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\CommandHandler\RemoveSpecificPricePriorityForProductHandlerInterface
{
    /**
     * @param SpecificPricePriorityUpdater $specificPricePriorityUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Update\SpecificPricePriorityUpdater $specificPricePriorityUpdater)
    {
    }
    /**
     * @param RemoveSpecificPricePriorityForProductCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command\RemoveSpecificPricePriorityForProductCommand $command): void
    {
    }
}
