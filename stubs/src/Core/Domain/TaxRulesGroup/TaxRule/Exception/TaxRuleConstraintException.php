<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Exception;

/**
 * Thrown when tax rule constraint is violated
 */
class TaxRuleConstraintException extends \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Exception\TaxRuleException
{
    /**
     * Thrown when provided tax rule id value is not valid
     */
    public const INVALID_ID = 1;
    /**
     * Thrown when provided country id value is not valid
     */
    public const INVALID_COUNTRY_ID = 2;
    /**
     * Thrown when provided tax id value is not valid
     */
    public const INVALID_TAX_ID = 3;
    /**
     * Thrown when provided behavior value is not valid
     */
    public const INVALID_BEHAVIOR = 4;
    /**
     * Thrown when provided zipcode value is not valid
     */
    public const INVALID_ZIPCODE = 5;
}
