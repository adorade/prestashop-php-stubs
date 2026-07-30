<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\Exception;

/**
 * Thrown when fails to delete supplier
 */
class CannotDeleteSupplierException extends \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierException
{
    /**
     * When fails to delete supplier due to existing pending orders of that supplier
     */
    public const HAS_PENDING_ORDERS = 1;
    /**
     * When fails to delete single supplier
     */
    public const FAILED_DELETE = 2;
    /**
     * When fails to delete supplier in bulk action
     */
    public const FAILED_BULK_DELETE = 3;
}
