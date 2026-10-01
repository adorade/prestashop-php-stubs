<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * Handles command which deletes addresses in bulk action
 */
class BulkDuplicateProductHandler extends \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\AbstractBulkHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\BulkDuplicateProductHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Product\Update\ProductDuplicator $productDuplicator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Update\ProductDuplicator $productDuplicator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\BulkDuplicateProductCommand $command): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Command\BulkDuplicateProductCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    protected function handleSingleAction(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, $command = null)
    {
    }
    protected function buildBulkException(): \PrestaShop\PrestaShop\Core\Domain\Product\Exception\BulkProductException
    {
    }
}
