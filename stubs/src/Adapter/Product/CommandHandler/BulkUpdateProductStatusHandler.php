<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * Handles command which deletes addresses in bulk action
 */
class BulkUpdateProductStatusHandler extends \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\AbstractBulkHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\BulkUpdateProductStatusHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Update\ProductIndexationUpdater $productIndexationUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\BulkUpdateProductStatusCommand $command): void
    {
    }
    /**
     * @param ProductId $productId
     * @param BulkUpdateProductStatusCommand $command
     *
     * @return void
     */
    protected function handleSingleAction(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, $command = null)
    {
    }
    protected function buildBulkException(): \PrestaShop\PrestaShop\Core\Domain\Product\Exception\BulkProductException
    {
    }
}
