<?php

namespace PrestaShop\PrestaShop\Adapter\Cart;

/**
 * Provides reusable methods for cart handlers
 *
 * @internal
 */
abstract class AbstractCartHandler
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId $cartId
     *
     * @return \Cart
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartNotFoundException
     */
    protected function getCart(\PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId $cartId)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager
     * @param \Cart $cart
     */
    protected function setCartContext(\PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, \Cart $cart): void
    {
    }
}
