<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Issues return product for given order.
 */
class IssueReturnProductCommand extends \PrestaShop\PrestaShop\Core\Domain\Order\Command\IssueStandardRefundCommand
{
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
     * @param bool $restockRefundedProducts
     * @param bool $refundShippingCost
     * @param bool $generateCreditSlip
     * @param bool $generateVoucher
     * @param int $voucherRefundType
     *
     * @throws InvalidCancelProductException
     * @throws OrderException
     */
    public function __construct(int $orderId, array $orderDetailRefunds, bool $restockRefundedProducts, bool $refundShippingCost, bool $generateCreditSlip, bool $generateVoucher, int $voucherRefundType)
    {
    }
}
