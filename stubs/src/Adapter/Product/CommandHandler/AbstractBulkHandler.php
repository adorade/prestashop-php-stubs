<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * This abstract class helps us build a bulk handler since the principle is often very similar, it might not be
 * compatible with all the handlers, but it helps for many.
 */
abstract class AbstractBulkHandler
{
    /**
     * @param ProductId[] $productIds
     * @param mixed|null $command
     *
     * @return array<int, mixed>
     *
     * @throws BulkProductException
     */
    protected function handleBulkAction(array $productIds, $command = null): array
    {
    }
    /**
     * This uses the base bulk exception class, but you can override this in your handler.
     *
     * @return BulkProductException
     */
    protected function buildBulkException(): \PrestaShop\PrestaShop\Core\Domain\Product\Exception\BulkProductException
    {
    }
    /**
     * @param ProductId $productId
     * @param mixed|null $command
     *
     * @return mixed
     */
    abstract protected function handleSingleAction(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, $command = null);
}
