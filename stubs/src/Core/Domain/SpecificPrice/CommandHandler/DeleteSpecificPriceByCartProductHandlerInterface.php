<?php

namespace PrestaShop\PrestaShop\Core\Domain\SpecificPrice\CommandHandler;

/**
 * @deprecated since 8.0.0 and will be removed in the next major version.
 */
interface DeleteSpecificPriceByCartProductHandlerInterface
{
    /**
     * @param DeleteSpecificPriceByCartProductCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SpecificPrice\Command\DeleteSpecificPriceByCartProductCommand $command): void;
}
