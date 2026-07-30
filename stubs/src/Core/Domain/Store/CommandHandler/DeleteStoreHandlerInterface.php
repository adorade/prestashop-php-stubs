<?php

namespace PrestaShop\PrestaShop\Core\Domain\Store\CommandHandler;

/**
 * Interface for DeleteStoreHandler
 */
interface DeleteStoreHandlerInterface
{
    /**
     * @param DeleteStoreCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Store\Command\DeleteStoreCommand $command): void;
}
