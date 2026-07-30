<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult;

class CartView
{
    /**
     * @param int $cartId
     * @param int $currencyId
     * @param array $customerInformation
     * @param array $orderInformation
     * @param array $cartSummary
     */
    public function __construct($cartId, $currencyId, array $customerInformation, array $orderInformation, array $cartSummary)
    {
    }
    /**
     * @return array
     */
    public function getCustomerInformation()
    {
    }
    /**
     * @return array
     */
    public function getOrderInformation()
    {
    }
    /**
     * @return int
     */
    public function getCartId()
    {
    }
    /**
     * @return int
     */
    public function getCartCurrencyId()
    {
    }
    /**
     * @return array
     */
    public function getCartSummary()
    {
    }
}
