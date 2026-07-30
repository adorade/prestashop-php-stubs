<?php

namespace PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\CommandHandler;

/**
 * Handles @see EditSpecificPriceCommand using legacy object model
 */
class EditSpecificPriceHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\CommandHandler\EditSpecificPriceHandlerInterface
{
    /**
     * @param SpecificPriceRepository $specificPriceRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Repository\SpecificPriceRepository $specificPriceRepository)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command\EditSpecificPriceCommand $command): void
    {
    }
    /**
     * @param EditSpecificPriceCommand $command
     * @param SpecificPrice $specificPrice
     *
     * @return string[]
     */
    protected function fillUpdatableProperties(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command\EditSpecificPriceCommand $command, \SpecificPrice $specificPrice): array
    {
    }
}
