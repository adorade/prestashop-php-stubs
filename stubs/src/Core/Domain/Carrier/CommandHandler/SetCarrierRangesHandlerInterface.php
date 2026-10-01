<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler;

/**
 * Defines contract for SetCarrierRangesHandler
 */
interface SetCarrierRangesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\Command\SetCarrierRangesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\SetCarrierRangesCommand $command): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId;
}
