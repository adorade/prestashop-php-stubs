<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\CommandHandler;

/**
 * Interface for handling DeleteSpecificPriceCommand command
 */
interface DeleteSpecificPriceHandlerInterface
{
    /**
     * @param DeleteSpecificPriceCommand $command
     *
     * @return void
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command\DeleteSpecificPriceCommand $command): void;
}
