<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Command abstract class for refund commands
 */
abstract class AbstractRefundCommand
{
    /**
     * @var OrderId
     */
    protected $orderId;
    /**
     * @var array
     */
    protected $orderDetailRefunds;
    /**
     * @var bool
     */
    protected $restockRefundedProducts;
    /**
     * @var bool
     */
    protected $generateCreditSlip;
    /**
     * @var bool
     */
    protected $generateVoucher;
    /**
     * @var int
     */
    protected $voucherRefundType;
    /**
     * @var DecimalNumber|null
     */
    protected $voucherRefundAmount;
    /**
     * @param int $orderId
     * @param array $orderDetailRefunds
     * @param bool $restockRefundedProducts
     * @param bool $generateVoucher
     * @param bool $generateCreditSlip
     * @param int $voucherRefundType
     * @param string|null $voucherRefundAmount
     *
     * @throws InvalidCancelProductException
     * @throws OrderException
     */
    public function __construct(int $orderId, array $orderDetailRefunds, bool $restockRefundedProducts, bool $generateCreditSlip, bool $generateVoucher, int $voucherRefundType, ?string $voucherRefundAmount = null)
    {
    }
    /**
     * @return OrderId
     */
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
    /**
     * @return array
     */
    public function getOrderDetailRefunds(): array
    {
    }
    /**
     * @return bool
     */
    public function restockRefundedProducts(): bool
    {
    }
    /**
     * @return bool
     */
    public function generateCreditSlip(): bool
    {
    }
    /**
     * @return bool
     */
    public function generateVoucher(): bool
    {
    }
    /**
     * @return int
     */
    public function getVoucherRefundType(): int
    {
    }
    /**
     * @return DecimalNumber|null
     */
    public function getVoucherRefundAmount(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @param array $orderDetailRefunds
     *
     * @throws InvalidCancelProductException
     * @throws OrderException
     */
    abstract protected function setOrderDetailRefunds(array $orderDetailRefunds);
}
