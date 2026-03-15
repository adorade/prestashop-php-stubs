<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler;

/**
 * Interface ToggleCurrencyStatusHandlerInterface defines contract for ToggleCurrencyStatusHandler.
 */
interface ToggleCurrencyStatusHandlerInterface
{
    /**
     * Handles currency status toggling logic.
     *
     * @param ToggleCurrencyStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\ToggleCurrencyStatusCommand $command);
}
