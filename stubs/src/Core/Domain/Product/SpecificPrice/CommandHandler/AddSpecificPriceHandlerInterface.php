<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\CommandHandler;

/**
 * Interface for handling AddProductSpecificPriceCommand command
 */
interface AddSpecificPriceHandlerInterface
{
    /**
     * @param AddSpecificPriceCommand $command
     *
     * @return SpecificPriceId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command\AddSpecificPriceCommand $command): \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\SpecificPriceId;
}
