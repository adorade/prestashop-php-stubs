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
     * @param \PrestaShop\PrestaShop\Core\Cart\CartRuleCollection $cartRules
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
    /**
     * @param CartRow $row
     *
     * @return float tax rate of the given row
     */
    protected function getTaxRateFromRow($row)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Cart\Calculator $calculator
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
     * @param \PrestaShop\PrestaShop\Core\Cart\CartRowCollection $cartRows
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
}
