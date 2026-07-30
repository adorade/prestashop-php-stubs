<?php

namespace PrestaShop\PrestaShop\Core\Domain\SpecificPrice\CommandHandler;

/**
 * @deprecated since 8.0.0 and will be removed in the next major version.
 * @see AddSpecificPriceHandlerInterface
 */
interface AddSpecificPriceHandlerInterface
{
    /**
     * @param AddSpecificPriceCommand $command
     *
     * @return SpecificPriceId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SpecificPrice\Command\AddSpecificPriceCommand $command): \PrestaShop\PrestaShop\Core\Domain\SpecificPrice\ValueObject\SpecificPriceId;
}
