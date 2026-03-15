<?php

namespace PrestaShop\PrestaShop\Adapter\Store\CommandHandler;

/**
 * Handles command that toggle store status
 */
class ToggleStoreStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\Store\CommandHandler\ToggleStoreStatusHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Store\Repository\StoreRepository $storeRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Store\Command\ToggleStoreStatusCommand $command): void
    {
    }
}
