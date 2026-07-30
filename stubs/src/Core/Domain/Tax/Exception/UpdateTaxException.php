<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\Exception;

/**
 * Is thrown when tax or taxes cannot be updated
 */
class UpdateTaxException extends \PrestaShop\PrestaShop\Core\Domain\Tax\Exception\TaxException
{
    /**
     * When fails to update single tax status
     */
    public const FAILED_UPDATE_STATUS = 10;
    /**
     * When fails to update taxes status on bulk action
     */
    public const FAILED_BULK_UPDATE_STATUS = 20;
}
