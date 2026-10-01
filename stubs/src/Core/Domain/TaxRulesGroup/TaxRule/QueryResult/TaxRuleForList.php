<?php

namespace PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\TaxRule\QueryResult;

/**
 * Transfers tax rule data for list display
 */
class TaxRuleForList
{
    public function __construct(private readonly int $taxRuleId, private readonly string $countryName, private readonly string $stateName, private readonly string $zipcode, private readonly int $behavior, private readonly string $taxName, private readonly string $taxRate, private readonly string $description)
    {
    }
    public function getTaxRuleId(): int
    {
    }
    public function getCountryName(): string
    {
    }
    public function getStateName(): string
    {
    }
    public function getZipcode(): string
    {
    }
    public function getBehavior(): int
    {
    }
    public function getTaxName(): string
    {
    }
    public function getTaxRate(): string
    {
    }
    public function getDescription(): string
    {
    }
}
