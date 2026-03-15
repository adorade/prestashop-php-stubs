<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\Exception;

/**
 * Is thrown when supplier constraints are violated
 */
class SupplierConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierException
{
    /**
     * When invalid data is provided for bulk action
     */
    public const INVALID_BULK_DATA = 1;
}
