<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\CommandHandler;

/**
 * Defines contract to handle @see EditSpecificPriceCommand
 */
interface EditSpecificPriceHandlerInterface
{
    /**
     * @param EditSpecificPriceCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command\EditSpecificPriceCommand $command): void;
}
