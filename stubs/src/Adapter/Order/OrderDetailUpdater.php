<?php

namespace PrestaShop\PrestaShop\Adapter\Order;

class OrderDetailUpdater
{
    /**
     * @param ContextStateManager $contextStateManager
     * @param ShopConfigurationInterface $shopConfiguration
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $shopConfiguration)
    {
    }
    /**
     * @param OrderDetail $orderDetail
     * @param Order $order
     * @param DecimalNumber $priceTaxExcluded
     * @param DecimalNumber $priceTaxIncluded
     *
     * @throws OrderException
     */
    public function updateOrderDetail(\OrderDetail $orderDetail, \Order $order, \PrestaShop\Decimal\DecimalNumber $priceTaxExcluded, \PrestaShop\Decimal\DecimalNumber $priceTaxIncluded): void
    {
    }
    /**
     * @param Order $order
     * @param int $productId
     * @param int $combinationId
     * @param DecimalNumber $priceTaxExcluded
     * @param DecimalNumber $priceTaxIncluded
     *
     * @throws OrderException
     */
    public function updateOrderDetailsForProduct(\Order $order, int $productId, int $combinationId, \PrestaShop\Decimal\DecimalNumber $priceTaxExcluded, \PrestaShop\Decimal\DecimalNumber $priceTaxIncluded, int $customizationId = 0): void
    {
    }
    /**
     * @param Order $order
     */
    public function updateOrderDetailsTaxes(\Order $order): void
    {
    }
}
