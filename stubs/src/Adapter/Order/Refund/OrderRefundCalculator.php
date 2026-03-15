<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Refund;

/**
 * Performs all computation for a refund on an Order, returns a OrderRefundDetail
 * object which contains all the refund detail.
 */
class OrderRefundCalculator
{
    /**
     * @param Order $order
     * @param array $orderDetailRefunds
     * @param DecimalNumber $shippingRefund
     * @param int $voucherRefundType
     * @param DecimalNumber|null $chosenVoucherAmount
     *
     * @return OrderRefundSummary
     *
     * @throws InvalidCancelProductException
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function computeOrderRefund(\Order $order, array $orderDetailRefunds, \PrestaShop\Decimal\DecimalNumber $shippingRefund, int $voucherRefundType, ?\PrestaShop\Decimal\DecimalNumber $chosenVoucherAmount): \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderRefundSummary
    {
    }
}
