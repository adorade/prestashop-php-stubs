<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Payment\Command;

/**
 * Adds payment for given order.
 */
class AddPaymentCommand
{
    /**
     * @var string
     */
    public const INVALID_CHARACTERS_NAME = '<>={}';
    /**
     * @var EmployeeId
     */
    protected $employeeId;
    /**
     * @param int $orderId
     * @param string $paymentDate
     * @param string $paymentMethod
     * @param string $paymentAmount
     * @param int $paymentCurrencyId
     * @param int $employeeId
     * @param int|null $orderInvoiceId
     * @param string|null $transactionId transaction ID, usually payment ID from payment gateway
     */
    public function __construct(int $orderId, string $paymentDate, string $paymentMethod, string $paymentAmount, int $paymentCurrencyId, int $employeeId, ?int $orderInvoiceId = null, ?string $transactionId = null)
    {
    }
    /**
     * @return OrderId
     */
    public function getOrderId()
    {
    }
    /**
     * @return DateTimeImmutable
     */
    public function getPaymentDate()
    {
    }
    /**
     * @return string
     */
    public function getPaymentMethod()
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getPaymentAmount()
    {
    }
    /**
     * @return CurrencyId
     */
    public function getPaymentCurrencyId()
    {
    }
    /**
     * @return int|null
     */
    public function getOrderInvoiceId()
    {
    }
    /**
     * @return EmployeeId
     */
    public function getEmployeeId(): \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId
    {
    }
    /**
     * @return string|null
     */
    public function getPaymentTransactionId()
    {
    }
}
