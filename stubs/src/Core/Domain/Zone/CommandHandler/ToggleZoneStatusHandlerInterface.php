<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\CommandHandler;

/**
 * Interface ToggleZoneStatusHandlerInterface defines contract for ToggleZoneStatusHandler
 */
interface ToggleZoneStatusHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Zone\Command\ToggleZoneStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Command\ToggleZoneStatusCommand $command): void;
}
