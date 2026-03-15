<?php

namespace PrestaShop\PrestaShop\Core\Cart;

class Fees
{
    /**
     * @var Cart
     */
    protected $cart;
    /**
     * @var AmountImmutable
     */
    protected $shippingFees;
    /**
     * @var AmountImmutable|null
     */
    protected $finalShippingFees;
    /**
     * @var AmountImmutable
     */
    protected $wrappingFees;
    /**
     * @var AmountImmutable
     */
    protected $finalWrappingFees;
    /**
     * indicates if cart was already processed.
     *
     * @var bool
     */
    protected $isProcessed = false;
    /**
     * @var int|null
     */
    protected $orderId;
    /**
     * @param int|null $orderId
     */
    public function __construct(?int $orderId = null)
    {
    }
    /**
     * @param CartCore $cart
     * @param CartRowCollection $cartRowCollection
     * @param int $computePrecision
     * @param int|null $id_carrier
     */
    public function processCalculation(\CartCore $cart, \PrestaShop\PrestaShop\Core\Cart\CartRowCollection $cartRowCollection, $computePrecision, $id_carrier = null)
    {
    }
    /**
     * @param Cart $cart
     *
     * @return Fees
     */
    public function setCart($cart)
    {
    }
    /**
     * @return AmountImmutable
     */
    public function getInitialShippingFees()
    {
    }
    /**
     * @return AmountImmutable|null
     */
    public function getFinalShippingFees()
    {
    }
    /**
     * @return AmountImmutable
     */
    public function getFinalWrappingFees()
    {
    }
    /**
     * @return AmountImmutable
     */
    public function getInitialWrappingFees()
    {
    }
    public function subDiscountValueShipping(\PrestaShop\PrestaShop\Core\Cart\AmountImmutable $amount)
    {
    }
}
