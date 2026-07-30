<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Exception;

/**
 * Base class to use for bulk operations, it stores a list of exception indexed by the product ID that was impacted.
 * It should be used as a base class for all the bulk action exceptions.
 */
class BulkProductException extends \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductException
{
    /**
     * @var array<int, ProductException>
     */
    protected $bulkExceptions = [];
    public function addException(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductException $exception): void
    {
    }
    /**
     * @return ProductException[]
     */
    public function getBulkExceptions(): array
    {
    }
}
