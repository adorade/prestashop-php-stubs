<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\ValueObject;

/**
 * Class ProductRefund
 */
class OrderDetailRefund
{
    /**
     * @param int $orderDetailId
     * @param int $productQuantity
     * @param string $refundedAmount
     *
     * @return self
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Order\Exception\InvalidCancelProductException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException
     */
    public static function createPartialRefund(int $orderDetailId, int $productQuantity, string $refundedAmount): self
    {
    }
    /**
     * @param int $orderDetailId
     * @param int $productQuantity
     *
     * @return self
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException
     */
    public static function createStandardRefund(int $orderDetailId, int $productQuantity): self
    {
    }
    /**
     * @return int
     */
    public function getOrderDetailId(): int
    {
    }
    /**
     * @return int
     */
    public function getProductQuantity(): int
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber|null
     */
    public function getRefundedAmount(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
}
