<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * Handles command which deletes products in bulk action
 */
final class BulkDeleteProductHandler extends \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\AbstractBulkHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\BulkDeleteProductHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\ProductDeleter $productDeleter)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\BulkDeleteProductCommand $command): void
    {
    }
}
