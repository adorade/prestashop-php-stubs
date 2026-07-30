<?php

namespace PrestaShop\PrestaShop\Core\CommandBus;

/**
 * Interface CommandBusInterface defines contract for Commands bus.
 */
interface CommandBusInterface
{
    /**
     * Handle command.
     *
     * @param object $command
     */
    public function handle($command);
}
