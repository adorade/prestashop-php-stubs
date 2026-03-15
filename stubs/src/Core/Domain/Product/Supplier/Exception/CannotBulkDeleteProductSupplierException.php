<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Exception;

/**
 * Thrown when bulk deleting product suppliers fails
 */
class CannotBulkDeleteProductSupplierException extends \PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Exception\ProductSupplierException
{
    /**
     * @param int[] $productSupplierIds ids of product supplier which cannot be deleted
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(array $productSupplierIds, $message = '', $code = 0, \Throwable $previous = null)
    {
    }
    /**
     * @return int[]
     */
    public function getProductSupplierIds(): array
    {
    }
}
