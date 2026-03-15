<?php

namespace PrestaShop\PrestaShop\Adapter\Order;

class OrderAmountUpdater
{
    /**
     * @param ShopConfigurationInterface $shopConfiguration
     * @param ContextStateManager $contextStateManager
     * @param OrderDetailUpdater $orderDetailUpdater
     * @param OrderProductRemover $orderProductRemover
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $shopConfiguration, \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, \PrestaShop\PrestaShop\Adapter\Order\OrderDetailUpdater $orderDetailUpdater, \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderProductRemover $orderProductRemover)
    {
    }
    /**
     * @param Order $order
     * @param Cart $cart
     * @param int|null $orderInvoiceId
     *
     * @throws OrderException
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function update(\Order $order, \Cart $cart, ?int $orderInvoiceId = null): void
    {
    }
    /**
     * @param Order $order
     *
     * @return bool
     */
    protected function isFreeShipping(\Order $order): bool
    {
    }
}
