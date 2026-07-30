<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Refund;

/**
 * Container of all the necessary information for an order refund
 */
class OrderRefundSummary
{
    /**
     * @param array $orderDetails
     * @param array $productRefunds
     * @param float $refundedAmount
     * @param float $refundedShipping
     * @param float $voucherAmount
     * @param bool $voucherChosen
     * @param bool $isTaxIncluded
     * @param int $precision
     */
    public function __construct(array $orderDetails, array $productRefunds, float $refundedAmount, float $refundedShipping, float $voucherAmount, bool $voucherChosen, bool $isTaxIncluded, int $precision)
    {
    }
    /**
     * @return OrderDetail[]
     */
    public function getOrderDetails(): array
    {
    }
    /**
     * @return array
     */
    public function getProductRefunds(): array
    {
    }
    /**
     * @return float
     */
    public function getRefundedAmount(): float
    {
    }
    /**
     * @return float
     */
    public function getRefundedShipping(): float
    {
    }
    /**
     * @return float
     */
    public function getVoucherAmount(): float
    {
    }
    /**
     * @return bool
     */
    public function isVoucherChosen(): bool
    {
    }
    /**
     * @return bool
     */
    public function isTaxIncluded(): bool
    {
    }
    /**
     * @return int
     */
    public function getPrecision(): int
    {
    }
    /**
     * @param int $orderDetailId
     *
     * @return OrderDetail|null
     */
    public function getOrderDetailById(int $orderDetailId): ?\OrderDetail
    {
    }
}
