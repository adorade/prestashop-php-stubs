<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\QueryResult;

/**
 * Transfers tax rule data for editing
 */
class EditableTaxRule
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\ValueObject\TaxRuleId $taxRuleId, \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId, int $countryId, int $stateId, string $zipcodeFrom, string $zipcodeTo, int $taxId, int $behavior, string $description)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\ValueObject\TaxRuleId
     */
    public function getTaxRuleId(): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\ValueObject\TaxRuleId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
     */
    public function getTaxRulesGroupId(): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId
    {
    }
    /**
     * @return int
     */
    public function getCountryId(): int
    {
    }
    /**
     * @return int
     */
    public function getStateId(): int
    {
    }
    /**
     * @return string
     */
    public function getZipcodeFrom(): string
    {
    }
    /**
     * @return string
     */
    public function getZipcodeTo(): string
    {
    }
    /**
     * @return int
     */
    public function getTaxId(): int
    {
    }
    /**
     * @return int
     */
    public function getBehavior(): int
    {
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
    }
}
