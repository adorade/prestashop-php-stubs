<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler;

/**
 * Interface for ToggleCarrierStatusHandler
 */
interface ToggleCarrierStatusHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\Command\ToggleCarrierStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\ToggleCarrierStatusCommand $command);
}
