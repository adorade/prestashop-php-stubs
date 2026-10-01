<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Command;

/**
 * Command responsible for adding a tax rule to a tax rules group.
 * When countryId is 0, the handler creates rules for all active countries.
 */
class AddTaxRuleCommand
{
    /**
     * @param int $taxRulesGroupId
     * @param int $countryId 0 means all countries
     * @param int $taxId 0 means no tax
     */
    public function __construct(int $taxRulesGroupId, int $countryId, int $taxId)
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
    public function getTaxId(): int
    {
    }
    /**
     * @return int[]
     */
    public function getStateIds(): array
    {
    }
    /**
     * @param int[] $stateIds
     *
     * @return self
     */
    public function setStateIds(array $stateIds): self
    {
    }
    /**
     * @return int
     */
    public function getBehavior(): int
    {
    }
    /**
     * @param int $behavior
     *
     * @return self
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Exception\TaxRuleConstraintException
     */
    public function setBehavior(int $behavior): self
    {
    }
    /**
     * @return string
     */
    public function getZipCode(): string
    {
    }
    /**
     * @param string $zipCode
     *
     * @return self
     */
    public function setZipCode(string $zipCode): self
    {
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
    }
}
