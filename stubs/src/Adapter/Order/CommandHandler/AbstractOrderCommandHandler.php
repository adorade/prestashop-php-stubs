<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * Abstracts reusable functionality for Order subdomain handlers.
 *
 * @internal
 */
abstract class AbstractOrderCommandHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler
{
    /**
     * @param OrderDetail $orderDetail
     * @param int $productQuantity
     * @param bool $delete
     */
    protected function reinjectQuantity(\OrderDetail $orderDetail, $productQuantity, $delete = false)
    {
    }
    /**
     * @param ContextStateManager $contextStateManager
     * @param Cart $cart
     */
    protected function setCartContext(\PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, \Cart $cart): void
    {
    }
    /**
     * @param ContextStateManager $contextStateManager
     * @param Order $order
     */
    protected function setOrderContext(\PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, \Order $order): void
    {
    }
    /**
     * @param Cart $cart
     *
     * @return Country
     *
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    protected function getCartTaxCountry(\Cart $cart): \Country
    {
    }
}
