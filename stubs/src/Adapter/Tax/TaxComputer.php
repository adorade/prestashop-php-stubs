<?php

namespace PrestaShop\PrestaShop\Adapter\Tax;

class TaxComputer
{
    /**
     * The conversion between tax rate as percent to tax ratio as float value can make us lose some precision,
     * so we increase the default precision (6) to avoid losing two digits by diving by 100 (two decimal factors).
     */
    protected const DIVISION_PRECISION = \PrestaShop\Decimal\Operation\Division::DEFAULT_PRECISION + 2;
    /**
     * @param TaxRulesGroupRepository $taxRulesGroupRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\TaxRulesGroup\Repository\TaxRulesGroupRepository $taxRulesGroupRepository)
    {
    }
    /**
     * @param DecimalNumber $priceTaxExcluded
     * @param TaxRulesGroupId $taxRulesGroupId
     * @param CountryId $countryId
     *
     * @return DecimalNumber
     */
    public function computePriceWithTaxes(\PrestaShop\Decimal\DecimalNumber $priceTaxExcluded, \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId, \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param DecimalNumber $priceTaxIncluded
     * @param TaxRulesGroupId $taxRulesGroupId
     * @param CountryId $countryId
     *
     * @return DecimalNumber
     */
    public function computePriceWithoutTaxes(\PrestaShop\Decimal\DecimalNumber $priceTaxIncluded, \PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId, \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * Returns the tax rate for a group and a specific country. The value is the decimal rate (usually a float between 0 and 1)
     *
     * @param TaxRulesGroupId $taxRulesGroupId
     * @param CountryId $countryId
     *
     * @return DecimalNumber
     */
    public function getTaxRate(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId, \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * Returns the tax rate for a group and a specific country and state. The value is the decimal rate (usually a float between 0 and 1)
     *
     * @param TaxRulesGroupId $taxRulesGroupId
     * @param CountryId $countryId
     * @param StateId $stateId
     *
     * @return DecimalNumber
     */
    public function getTaxRateByState(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId, \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId, \PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateId $stateId): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param TaxRulesGroupId $taxRulesGroupId
     * @param CountryId $countryId
     *
     * @return DecimalNumber
     */
    protected function getTaxRatio(\PrestaShop\PrestaShop\Core\Domain\TaxRulesGroup\ValueObject\TaxRulesGroupId $taxRulesGroupId, \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId $countryId): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
