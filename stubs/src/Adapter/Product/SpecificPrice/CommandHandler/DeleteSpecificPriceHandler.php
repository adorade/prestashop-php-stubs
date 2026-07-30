<?php

namespace PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\CommandHandler;

/**
 * Handles DeleteSpecificPriceCommand using legacy object model
 */
class DeleteSpecificPriceHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\CommandHandler\DeleteSpecificPriceHandlerInterface
{
    /**
     * @param SpecificPriceRepository $specificPriceRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Repository\SpecificPriceRepository $specificPriceRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command\DeleteSpecificPriceCommand $command): void
    {
    }
}
