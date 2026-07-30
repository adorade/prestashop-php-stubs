<?php

namespace PrestaShop\PrestaShop\Adapter\Tax;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * This class will provide data from DB / ORM about tax rules.
 */
class TaxRuleDataProvider
{
    /**
     * Get all Tax Rules Groups.
     *
     * @param bool $only_active
     *
     * @return array TaxRulesGroup
     */
    public function getTaxRulesGroups($only_active = true)
    {
    }
    /**
     * Get most used Tax.
     *
     * @return int
     */
    public function getIdTaxRulesGroupMostUsed()
    {
    }
    /**
     * Get all Tax Rules Groups with rates.
     *
     * @return array TaxRulesGroup
     */
    public function getTaxRulesGroupWithRates()
    {
    }
    /**
     * Get product eco taxe rate.
     *
     * @return float tax
     */
    public function getProductEcotaxRate()
    {
    }
    /**
     * Gets a list of tax rules groups for choice type.
     *
     * @param bool $onlyActive if true, returns only active tax rules groups
     *
     * @return array
     */
    public function getTaxRulesGroupChoices($onlyActive = true)
    {
    }
}
