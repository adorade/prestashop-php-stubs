<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

/**
 * Updates cart currency
 */
class UpdateCartCurrencyCommand
{
    /**
     * @param int $cartId
     * @param int $newCurrencyId
     */
    public function __construct($cartId, $newCurrencyId)
    {
    }
    /**
     * @return CartId
     */
    public function getCartId()
    {
    }
    /**
     * @return CurrencyId
     */
    public function getNewCurrencyId()
    {
    }
}
