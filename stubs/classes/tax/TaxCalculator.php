<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
/**
 * @since 1.5.0
 *
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
     * @var int (COMBINE_METHOD | ONE_AFTER_ANOTHER_METHOD)
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
