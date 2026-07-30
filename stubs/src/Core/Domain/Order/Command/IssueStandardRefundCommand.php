<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Issues standard refund for given order.
 */
class IssueStandardRefundCommand extends \PrestaShop\PrestaShop\Core\Domain\Order\Command\AbstractRefundCommand
{
    /**
     * @var bool
     */
    protected $refundShippingCost;
    /**
     * The expected format for $orderDetailRefunds is an associative array indexed
     * by OrderDetail id containing one fields quantity
     *
     * ex: $orderDetailRefunds = [
     *      {orderId} => [
     *          'quantity' => 2,
     *      ],
     * ];
     *
     * @param int $orderId
     * @param array $orderDetailRefunds
     * @param bool $refundShippingCost
     * @param bool $generateCreditSlip
     * @param bool $generateVoucher
     * @param int $voucherRefundType
     *
     * @throws InvalidCancelProductException
     * @throws OrderException
     */
    public function __construct(int $orderId, array $orderDetailRefunds, bool $refundShippingCost, bool $generateCreditSlip, bool $generateVoucher, int $voucherRefundType)
    {
    }
    /**
     * @return bool
     */
    public function refundShippingCost(): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function setOrderDetailRefunds(array $orderDetailRefunds)
    {
    }
}
