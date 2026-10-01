<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Exception;

/**
 * Thrown on failure to delete all selected tax rules
 */
class CannotBulkDeleteTaxRuleException extends \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Exception\TaxRuleException
{
    /**
     * @param int[] $taxRuleIds
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct(array $taxRuleIds, string $message = '', int $code = 0, ?\Throwable $previous = null)
    {
    }
    /**
     * @return int[]
     */
    public function getTaxRuleIds(): array
    {
    }
}
