<?php

namespace PrestaShop\PrestaShop\Adapter\Store\CommandHandler;

/**
 * Handles command that deletes stores
 */
class BulkDeleteStoreHandler implements \PrestaShop\PrestaShop\Core\Domain\Store\CommandHandler\BulkDeleteStoreHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Store\Repository\StoreRepository $storeRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Store\Command\BulkDeleteStoreCommand $command): void
    {
    }
}
