<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Adds new order from given cart.
 */
class AddOrderFromBackOfficeCommand
{
    /**
     * @param int $cartId
     * @param int $employeeId
     * @param string $orderMessage
     * @param string $paymentModuleName
     * @param int $orderStateId
     */
    public function __construct($cartId, $employeeId, $orderMessage, $paymentModuleName, $orderStateId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
     */
    public function getCartId()
    {
    }
    /**
     * @return string
     */
    public function getOrderMessage()
    {
    }
    /**
     * @return string
     */
    public function getPaymentModuleName()
    {
    }
    /**
     * @return int
     */
    public function getOrderStateId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeIdInterface
     */
    public function getEmployeeId()
    {
    }
}
