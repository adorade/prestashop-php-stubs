<?php

namespace PrestaShop\PrestaShop\Adapter\SpecificPrice\CommandHandler;

/**
 * @deprecated since 8.0.0 and will be removed in the next major version.
 */
final class DeleteSpecificPriceByCartProductHandler implements \PrestaShop\PrestaShop\Core\Domain\SpecificPrice\CommandHandler\DeleteSpecificPriceByCartProductHandlerInterface
{
    /**
     * @param DeleteSpecificPriceByCartProductCommand $command
     *
     * @throws SpecificPriceException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SpecificPrice\Command\DeleteSpecificPriceByCartProductCommand $command): void
    {
    }
}
