<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Product\Command;

/**
 * Updates product in given order.
 */
class UpdateProductInOrderCommand
{
    /**
     * @param int $orderId
     * @param int $orderDetailId
     * @param string $priceTaxIncluded
     * @param string $priceTaxExcluded
     * @param int $quantity
     * @param int|null $orderInvoiceId
     * @param null|array<int, array{
     *     shipment_id: int,
     *     quantity: int
     * }> $shipmentsQuantities
     */
    public function __construct(int $orderId, int $orderDetailId, string $priceTaxIncluded, string $priceTaxExcluded, int $quantity, ?int $orderInvoiceId = null, ?array $shipmentsQuantities = null)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
     */
    public function getOrderId()
    {
    }
    /**
     * @return int
     */
    public function getOrderDetailId()
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getPriceTaxIncluded()
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getPriceTaxExcluded()
    {
    }
    /**
     * @return int
     */
    public function getQuantity()
    {
    }
    /**
     * @return int|null
     */
    public function getOrderInvoiceId()
    {
    }
    /**
     * @return null|array<int, array{
     *     shipment_id: int,
     *     quantity: int
     * }>
     */
    public function getShipmentsQuantities()
    {
    }
}
