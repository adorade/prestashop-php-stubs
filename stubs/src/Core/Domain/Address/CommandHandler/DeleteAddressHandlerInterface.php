<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler;

/**
 * Defines contract for DeleteAddressHandler
 */
interface DeleteAddressHandlerInterface
{
    /**
     * @param DeleteAddressCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\DeleteAddressCommand $command);
}
