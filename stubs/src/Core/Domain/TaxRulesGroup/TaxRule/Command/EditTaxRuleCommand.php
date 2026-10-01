<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\Command;

/**
 * Command responsible for editing a tax rule
 */
class EditTaxRuleCommand
{
    /**
     * @param int $taxRuleId
     */
    public function __construct(int $taxRuleId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\ValueObject\TaxRuleId
     */
    public function getTaxRuleId(): \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\ValueObject\TaxRuleId
    {
    }
    /**
     * @return int|null
     */
    public function getCountryId(): ?int
    {
    }
    /**
     * @param int $countryId
     *
     * @return self
     */
    public function setCountryId(int $countryId): self
    {
    }
    /**
     * @return int|null
     */
    public function getStateId(): ?int
    {
    }
    /**
     * @param int $stateId
     *
     * @return self
     */
    public function setStateId(int $stateId): self
    {
    }
    /**
     * @return int|null
     */
    public function getTaxId(): ?int
    {
    }
    /**
     * @param int $taxId
     *
     * @return self
     */
    public function setTaxId(int $taxId): self
    {
    }
    /**
     * @return int|null
     */
    public function getBehavior(): ?int
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
     * @return string|null
     */
    public function getZipCode(): ?string
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
     * @return string|null
     */
    public function getDescription(): ?string
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
