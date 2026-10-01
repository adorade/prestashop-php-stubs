<?php

namespace PrestaShop\PrestaShop\Core\Cart;

class CartRuleCalculator
{
    /**
     * @var Calculator
     */
    protected $calculator;
    /**
     * @var CartRowCollection
     */
    protected $cartRows;
    /**
     * @var CartRuleCollection
     */
    protected $cartRules;
    /**
     * @var Fees
     */
    protected $fees;
    public function __construct(private readonly ?\PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagManager = null)
    {
    }
    /**
     * process cartrules calculation
     */
    public function applyCartRules()
    {
    }
    /**
     * process cartrules calculation, excluding free-shipping processing
     */
    public function applyCartRulesWithoutFreeShipping()
    {
    }
    /**
     * @param CartRuleCollection $cartRules
     *
     * @return CartRuleCalculator
     */
    public function setCartRules($cartRules)
    {
    }
    /**
     * @param CartRuleData $cartRuleData
     * @param bool $withFreeShipping used to calculate free shipping discount (avoid loop on shipping calculation)
     *
     * @throws \PrestaShopDatabaseException
     */
    protected function applyCartRule(\PrestaShop\PrestaShop\Core\Cart\CartRuleData $cartRuleData, $withFreeShipping = true)
    {
    }
    protected function getCartRowsMatchingSelection(\PrestaShop\PrestaShop\Core\Cart\CartRuleData $cartRuleData, \CartCore $cart): \PrestaShop\PrestaShop\Core\Cart\CartRowCollection
    {
    }
    protected function getCheapestCartRow(\PrestaShop\PrestaShop\Core\Cart\CartRuleData $cartRuleData): ?\PrestaShop\PrestaShop\Core\Cart\CartRow
    {
    }
    /**
     * @param CartRow $row
     *
     * @return float tax rate of the given row
     */
    protected function getTaxRateFromRow($row)
    {
    }
    /**
     * @param Calculator $calculator
     *
     * @return CartRuleCalculator
     */
    public function setCalculator($calculator)
    {
    }
    protected function convertAmountBetweenCurrencies($amount, \Currency $currencyFrom, \Currency $currencyTo)
    {
    }
    /**
     * @param CartRowCollection $cartRows
     *
     * @return CartRuleCalculator
     */
    public function setCartRows($cartRows)
    {
    }
    /**
     * @return CartRuleCollection
     */
    public function getCartRulesData()
    {
    }
    /**
     * @return Calculator
     */
    public function getCalculator()
    {
    }
    /**
     * @return CartRowCollection
     */
    public function getCartRows()
    {
    }
    /**
     * @return Fees
     */
    public function getFees()
    {
    }
    protected function isDiscountFeatureFlagEnabled(): bool
    {
    }
}
