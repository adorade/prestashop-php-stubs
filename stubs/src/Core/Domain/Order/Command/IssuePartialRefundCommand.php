<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Issues partial refund for given order.
 */
class IssuePartialRefundCommand extends \PrestaShop\PrestaShop\Core\Domain\Order\Command\AbstractRefundCommand
{
    /**
     * The expected format for $orderDetailRefunds is an associative array indexed
     * by OrderDetail id containing two fields amount and quantity
     *
     * ex: $orderDetailRefunds = [
     *      {orderId} => [
     *          'quantity' => 2,
     *          'amount' => 23.56,
     *      ],
     * ];
     *
     * @param int $orderId
     * @param array $orderDetailRefunds
     * @param string $shippingCostRefundAmount
     * @param bool $restockRefundedProducts
     * @param bool $generateVoucher
     * @param bool $generateCreditSlip
     * @param int $voucherRefundType
     * @param string|null $voucherRefundAmount
     *
     * @throws InvalidCancelProductException
     * @throws OrderException
     */
    public function __construct(int $orderId, array $orderDetailRefunds, string $shippingCostRefundAmount, bool $restockRefundedProducts, bool $generateCreditSlip, bool $generateVoucher, int $voucherRefundType, ?string $voucherRefundAmount = null)
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getShippingCostRefundAmount(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function setOrderDetailRefunds(array $orderDetailRefunds)
    {
    }
}
