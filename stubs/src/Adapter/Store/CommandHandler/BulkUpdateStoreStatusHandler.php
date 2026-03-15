<?php

namespace PrestaShop\PrestaShop\Adapter\Store\CommandHandler;

/**
 * Handles command that toggle store status
 */
class BulkUpdateStoreStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\Store\CommandHandler\BulkUpdateStoreStatusHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Store\Repository\StoreRepository $storeRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Store\Command\BulkUpdateStoreStatusCommand $command): void
    {
    }
}
