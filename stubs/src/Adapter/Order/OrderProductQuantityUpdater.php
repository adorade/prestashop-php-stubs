<?php

namespace PrestaShop\PrestaShop\Adapter\Order;

/**
 * Increase or decrease quantity of an order's product.
 * Recalculate cart rules, order's prices and shipping infos.
 */
class OrderProductQuantityUpdater
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Order\OrderAmountUpdater $orderAmountUpdater, \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderProductRemover $orderProductRemover, \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager)
    {
    }
    /**
     * @param Order $order
     * @param OrderDetail $orderDetail
     * @param int $newQuantity
     * @param OrderInvoice|null $orderInvoice
     * @param bool $updateCart Used when you don't want to update the cart (CartRule removal for example)
     *
     * @return Order
     *
     * @throws OrderException
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    public function update(\Order $order, \OrderDetail $orderDetail, int $newQuantity, ?\OrderInvoice $orderInvoice, bool $updateCart = true): \Order
    {
    }
    /**
     * @param OrderDetail $orderDetail
     * @param int $oldQuantity
     * @param int $newQuantity
     * @param bool $delete
     *
     * @throws OrderException
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    protected function reinjectQuantity(\OrderDetail $orderDetail, int $oldQuantity, int $newQuantity, $delete = false)
    {
    }
}
