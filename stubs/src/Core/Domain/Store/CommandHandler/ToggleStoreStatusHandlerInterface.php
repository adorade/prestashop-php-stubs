<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\CommandHandler;

/**
 * Interface for ToggleStoreStatusHandler
 */
interface ToggleStoreStatusHandlerInterface
{
    /**
     * @param ToggleStoreStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Store\Command\ToggleStoreStatusCommand $command): void;
}
