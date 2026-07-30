<?php

namespace PrestaShop\PrestaShop\Adapter\Order;

/**
 * Reusable methods for Order subdomain command/query handlers.
 */
abstract class AbstractOrderHandler
{
    /**
     * @param OrderId $orderId
     *
     * @return Order
     */
    protected function getOrder(\PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId $orderId)
    {
    }
    /**
     * @param Order $order
     *
     * @return bool
     */
    protected function isTaxIncludedInOrder(\Order $order): bool
    {
    }
    /**
     * @param Order $order
     *
     * @return int
     */
    protected function getOrderTaxCalculationMethod(\Order $order): int
    {
    }
    /**
     * @param Cart $cart
     *
     * @return int
     */
    protected function getPrecisionFromCart(\Cart $cart): int
    {
    }
    /**
     * @param int $combinationId
     *
     * @return Combination|null
     */
    protected function getCombination(int $combinationId)
    {
    }
    /**
     * @param ProductId $productId
     * @param int $langId
     *
     * @return Product
     */
    protected function getProduct(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, $langId)
    {
    }
    /**
     * @return string
     */
    protected function getNumberRoundMode(): string
    {
    }
    /**
     * Delivery option consists of deliveryAddress and carrierId.
     *
     * Legacy multishipping feature used comma separated carriers in delivery option (e.g. {'1':'6,7'}
     * Now that multishipping is gone - delivery option should consist of one carrier and one address.
     *
     * However the structure of deliveryOptions is still used with comma in legacy, so
     * this method provides assurance for deliveryOption structure until major refactoring
     *
     * @param int $carrierId
     *
     * @return string
     */
    protected function formatLegacyDeliveryOptionFromCarrierId(int $carrierId): string
    {
    }
}
