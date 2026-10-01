<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\Exception;

/**
 * Is thrown when tax or taxes cannot be deleted
 */
class DeleteTaxException extends \PrestaShop\PrestaShop\Core\Domain\Tax\Exception\TaxException
{
    /**
     * When fails to delete single tax
     */
    public const FAILED_DELETE = 10;
    /**
     * When fails to delete taxes on bulk action
     */
    public const FAILED_BULK_DELETE = 20;
}
