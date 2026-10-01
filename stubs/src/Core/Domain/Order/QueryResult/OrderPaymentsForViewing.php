<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderPaymentsForViewing
{
    /**
     * @param OrderPaymentForViewing[] $payments
     * @param string|null $amountToPay
     * @param string|null $paidAmount
     * @param int[] $paymentMismatchOrderIds
     */
    public function __construct(array $payments, ?string $amountToPay, ?string $paidAmount, array $paymentMismatchOrderIds)
    {
    }
    /**
     * @return OrderPaymentForViewing[]
     */
    public function getPayments(): array
    {
    }
    /**
     * @return string|null
     */
    public function getAmountToPay(): ?string
    {
    }
    /**
     * @return string|null
     */
    public function getPaidAmount(): ?string
    {
    }
    /**
     * @return array
     */
    public function getPaymentMismatchOrderIds(): array
    {
    }
}
