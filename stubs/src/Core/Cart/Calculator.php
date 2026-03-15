<?php

namespace PrestaShop\PrestaShop\Core\Cart;

/**
 * provides methods to process cart calculation.
 */
class Calculator
{
    /**
     * @var CartCore
     */
    protected $cart;
    /**
     * @var int
     */
    protected $id_carrier;
    /**
     * @var int|null
     */
    protected $orderId;
    /**
     * @var CartRowCollection collection of cart content row (product+qty)
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
     * @var CartRuleCalculator
     */
    protected $cartRuleCalculator;
    /**
     * indicates if cart was already processed.
     *
     * @var bool
     */
    protected $isProcessed = false;
    /**
     * @var int|null
     */
    protected $computePrecision;
    /**
     * @param CartCore $cart
     * @param int $carrierId
     * @param int|null $computePrecision
     * @param int|null $orderId
     */
    public function __construct(\CartCore $cart, $carrierId, ?int $computePrecision = null, ?int $orderId = null)
    {
    }
    /**
     * insert a new cart row in the calculator.
     *
     * @param CartRow $cartRow cart item row (product+qty informations)
     *
     * @return $this
     */
    public function addCartRow(\PrestaShop\PrestaShop\Core\Cart\CartRow $cartRow)
    {
    }
    /**
     * insert a new cart rule in the calculator.
     *
     * @param \PrestaShop\PrestaShop\Core\Cart\CartRuleData $cartRule
     *
     * @return $this
     */
    public function addCartRule(\PrestaShop\PrestaShop\Core\Cart\CartRuleData $cartRule)
    {
    }
    /**
     * run the whole calculation process: calculate rows, discounts, fees.
     *
     * @param int $computePrecision Not used since 1.7.7.0, kept for backward compatibility
     *
     * @return $this
     */
    public function processCalculation($computePrecision = null)
    {
    }
    /**
     * @param bool $ignoreProcessedFlag force getting total even if calculation was not made internaly
     *
     * @return AmountImmutable
     *
     * @throws \Exception
     */
    public function getTotal($ignoreProcessedFlag = false)
    {
    }
    /**
     * @return AmountImmutable
     *
     * @throws \Exception
     */
    public function getRowTotal()
    {
    }
    /**
     * @return AmountImmutable
     *
     * @throws \Exception
     */
    public function getRowTotalWithoutDiscount()
    {
    }
    /**
     * @return AmountImmutable
     *
     * @throws \Exception
     */
    public function getDiscountTotal()
    {
    }
    /**
     * @param CartCore $cart
     *
     * @return Calculator
     */
    protected function setCart($cart)
    {
    }
    /**
     * @param mixed $id_carrier
     *
     * @return Calculator
     */
    protected function setCarrierId($id_carrier)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Cart\Fees
     */
    public function getFees()
    {
    }
    /**
     * @return CartCore
     */
    public function getCart()
    {
    }
    /**
     * Calculate row total.
     *
     * @param CartRow $cartRow
     */
    protected function calculateRowTotal(\PrestaShop\PrestaShop\Core\Cart\CartRow $cartRow)
    {
    }
    /**
     * calculate only product rows.
     */
    public function calculateRows()
    {
    }
    /**
     * calculate only cart rules (rows and fees have to be calculated first).
     */
    public function calculateCartRules()
    {
    }
    /**
     * calculate only cart rules (rows and fees have to be calculated first), but don't process free-shipping discount
     * (avoid loop on shipping calculation)
     */
    public function calculateCartRulesWithoutFreeShipping()
    {
    }
    /**
     * calculate wrapping and shipping fees (rows have to be calculated first).
     *
     * @param int|null $computePrecision Not used since 1.7.7.0, kept for backward compatibility
     */
    public function calculateFees($computePrecision = null)
    {
    }
    /**
     * @return CartRuleCollection
     */
    public function getCartRulesData()
    {
    }
}
