<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception;

/**
 * Thrown on failure to delete all selected tax rules groups without errors
 */
class CannotBulkDeleteTaxRulesGroupException extends \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\Exception\TaxRulesGroupException
{
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
