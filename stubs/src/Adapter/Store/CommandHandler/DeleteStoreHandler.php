<?php

namespace PrestaShop\PrestaShop\Adapter\Store\CommandHandler;

/**
 * Handles command that deletes store
 */
class DeleteStoreHandler implements \PrestaShop\PrestaShop\Core\Domain\Store\CommandHandler\DeleteStoreHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Store\Repository\StoreRepository $storeRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Store\Command\DeleteStoreCommand $command): void
    {
    }
}
