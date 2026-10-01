<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * TaxCaculator is responsible of the tax computation
 */
class TaxCalculatorCore
{
    /**
     * ONE_TAX_ONLY_METHOD uses one tax only
     */
    public const ONE_TAX_ONLY_METHOD = 0;
    /**
     * COMBINE_METHOD sum taxes
     * eg: 100€ * (10% + 15%).
     */
    public const COMBINE_METHOD = 1;
    /**
     * ONE_AFTER_ANOTHER_METHOD apply taxes one after another
     * eg: (100€ * 10%) * 15%.
     */
    public const ONE_AFTER_ANOTHER_METHOD = 2;
    /**
     * @var array
     */
    public $taxes;
    /**
     * @var int (COMBINE_METHOD|ONE_AFTER_ANOTHER_METHOD)
     */
    public $computation_method;
    /**
     * @param array $taxes
     * @param int $computation_method (COMBINE_METHOD | ONE_AFTER_ANOTHER_METHOD)
     */
    public function __construct(array $taxes = [], $computation_method = \TaxCalculator::COMBINE_METHOD)
    {
    }
    /**
     * Compute and add the taxes to the specified price.
     *
     * @param float $price_te price tax excluded
     *
     * @return float price with taxes
     */
    public function addTaxes($price_te)
    {
    }
    /**
     * Compute and remove the taxes to the specified price.
     *
     * @param float $price_ti price tax inclusive
     *
     * @return float price without taxes
     */
    public function removeTaxes($price_ti)
    {
    }
    /**
     * @return float total taxes rate
     */
    public function getTotalRate()
    {
    }
    public function getTaxesName()
    {
    }
    /**
     * Return the tax amount associated to each taxes of the TaxCalculator.
     *
     * @param float $price_te
     *
     * @return array $taxes_amount
     */
    public function getTaxesAmount($price_te)
    {
    }
    /**
     * Return the total taxes amount.
     *
     * @param float $price_te
     *
     * @return float $amount
     */
    public function getTaxesTotalAmount($price_te)
    {
    }
}
