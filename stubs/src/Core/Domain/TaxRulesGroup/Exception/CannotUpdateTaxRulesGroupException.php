<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception;

/**
 * Thrown on failure to update tax rules group
 */
class CannotUpdateTaxRulesGroupException extends \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\TaxRulesGroupException
{
    /**
     * Thrown when status toggling fails
     */
    public const FAILED_TOGGLE_STATUS = 1;
    /**
     * When generic product update fails
     */
    public const FAILED_UPDATE_TAX_RULES_GROUP = 10;
}
