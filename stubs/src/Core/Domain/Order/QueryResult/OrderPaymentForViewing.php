<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderPaymentForViewing
{
    /**
     * @var string|null
     */
    protected $employeeName;
    /**
     * @param int $paymentId
     * @param DateTimeImmutable $date
     * @param string $paymentMethod
     * @param string $transactionId
     * @param string $amount
     * @param string|null $invoiceNumber
     * @param string $cardNumber
     * @param string $cardBrand
     * @param string $cardExpiration
     * @param string $cardHolder
     * @param string|null $employeeName
     */
    public function __construct(int $paymentId, \DateTimeImmutable $date, string $paymentMethod, string $transactionId, string $amount, ?string $invoiceNumber, string $cardNumber, string $cardBrand, string $cardExpiration, string $cardHolder, ?string $employeeName = null)
    {
    }
    /**
     * @return int
     */
    public function getPaymentId(): int
    {
    }
    /**
     * @return DateTimeImmutable
     */
    public function getDate(): \DateTimeImmutable
    {
    }
    /**
     * @return string
     */
    public function getPaymentMethod(): string
    {
    }
    /**
     * @return string
     */
    public function getTransactionId(): string
    {
    }
    /**
     * @return string
     */
    public function getAmount(): string
    {
    }
    /**
     * @return string|null
     */
    public function getInvoiceNumber(): ?string
    {
    }
    /**
     * @return string
     */
    public function getCardNumber(): string
    {
    }
    /**
     * @return string
     */
    public function getCardBrand(): string
    {
    }
    /**
     * @return string
     */
    public function getCardExpiration(): string
    {
    }
    /**
     * @return string
     */
    public function getCardHolder(): string
    {
    }
    /**
     * @return string|null
     */
    public function getEmployeeName(): ?string
    {
    }
}
