<?php

/**
 * @since 1.5.0.1
 */
class TaxRulesTaxManagerCore implements \TaxManagerInterface
{
    public $address;
    public $type;
    public $tax_calculator;
    /**
     * @param Address $address
     * @param mixed $type An additional parameter for the tax manager (ex: tax rules id for TaxRuleTaxManager)
     */
    public function __construct(\Address $address, $type, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configurationManager = \null)
    {
    }
    /**
     * Returns true if this tax manager is available for this address.
     *
     * @return bool
     */
    public static function isAvailableForThisAddress(\Address $address)
    {
    }
    /**
     * Return the tax calculator associated to this address.
     *
     * @return TaxCalculator
     */
    public function getTaxCalculator()
    {
    }
}
