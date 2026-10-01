<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Refund;

/**
 * Performs all computation for a refund on an Order, returns a OrderRefundDetail
 * object which contains all the refund detail.
 */
class OrderRefundCalculator
{
    /**
     * @param \Order $order
     * @param array $orderDetailRefunds
     * @param \PrestaShop\Decimal\DecimalNumber $shippingRefund
     * @param int $voucherRefundType
     * @param \PrestaShop\Decimal\DecimalNumber|null $chosenVoucherAmount
     *
     * @return OrderRefundSummary
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Order\Exception\InvalidCancelProductException
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    public function computeOrderRefund(\Order $order, array $orderDetailRefunds, \PrestaShop\Decimal\DecimalNumber $shippingRefund, int $voucherRefundType, ?\PrestaShop\Decimal\DecimalNumber $chosenVoucherAmount): \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderRefundSummary
    {
    }
}
