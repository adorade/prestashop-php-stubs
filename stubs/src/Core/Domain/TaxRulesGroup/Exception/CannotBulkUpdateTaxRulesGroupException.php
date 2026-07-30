<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception;

/**
 * Thrown on failure to bulk update tax rules groups without errors
 */
class CannotBulkUpdateTaxRulesGroupException extends \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\TaxRulesGroupException
{
    /**
     * @param array $taxRulesGroupsIds
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct(array $taxRulesGroupsIds, $message = '', $code = 0, \Exception $previous = null)
    {
    }
    /**
     * @return int[]
     */
    public function getTaxRulesGroupsIds()
    {
    }
}
