<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Exception;

/**
 * Exception thrown when a bulk update has been tried, it stores the exception for each failing product.
 */
class CannotBulkUpdateProductException extends \PrestaShop\PrestaShop\Core\Domain\Product\Exception\BulkProductException
{
}
