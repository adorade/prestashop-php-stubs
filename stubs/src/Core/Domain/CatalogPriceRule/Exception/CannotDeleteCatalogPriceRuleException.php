<?php

namespace PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Exception;

/**
 * Is thrown when catalog price rule cannot be deleted
 */
class CannotDeleteCatalogPriceRuleException extends \PrestaShop\PrestaShop\Core\Domain\CatalogPriceRule\Exception\CatalogPriceRuleException
{
    /**
     * When fails to delete single catalog price rule
     */
    public const FAILED_DELETE = 10;
    /**
     * When fails to delete catalog price rule in bulk action
     */
    public const FAILED_BULK_DELETE = 20;
}
