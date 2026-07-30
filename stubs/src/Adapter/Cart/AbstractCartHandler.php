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
     * @param CartId $cartId
     *
     * @return Cart
     *
     * @throws CartNotFoundException
     */
    protected function getCart(\PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId $cartId)
    {
    }
    /**
     * @param ContextStateManager $contextStateManager
     * @param Cart $cart
     */
    protected function setCartContext(\PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, \Cart $cart): void
    {
    }
}
