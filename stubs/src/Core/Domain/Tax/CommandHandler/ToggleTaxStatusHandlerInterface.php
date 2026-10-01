<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\CommandHandler;

/**
 * Defines contract for ToggleTaxStatusHandler
 */
interface ToggleTaxStatusHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Tax\Command\ToggleTaxStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Tax\Command\ToggleTaxStatusCommand $command);
}
