<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\CommandHandler;

/**
 * Interface ToggleStateStatusHandlerInterface defines contract for ToggleStateStatusHandler
 */
interface ToggleStateStatusHandlerInterface
{
    /**
     * @param ToggleStateStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\State\Command\ToggleStateStatusCommand $command): void;
}
